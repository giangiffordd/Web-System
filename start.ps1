<#
start.ps1
One-click startup for the Puihaha app (Windows PowerShell).

What it does:
- Runs `docker compose up --build -d`
- Waits for the mysql container to be healthy (max timeout)
- Runs migrations and the Puihaha seeder inside the php container
- Optionally opens http://localhost:8090 in the default browser

Usage:
  .\start.ps1            # start and prepare (opens browser by default)
  .\start.ps1 -NoBrowse # skip opening browser
#>

param(
  [switch]$NoBrowse
)

function Check-Command {
  param([string]$cmd)
  $which = Get-Command $cmd -ErrorAction SilentlyContinue
  return $which -ne $null
}

if (-not (Check-Command -cmd 'docker')) {
  Write-Error "Docker CLI not found. Install Docker Desktop and ensure 'docker' is on PATH."
  exit 1
}

Write-Host "Starting containers (docker compose up --build -d)..." -ForegroundColor Cyan
docker compose up --build -d

# Wait for mysql to report running/healthy
$maxSeconds = 120
$interval = 3
$elapsed = 0
Write-Host "Waiting for database container to be ready (timeout ${maxSeconds}s)..." -ForegroundColor Cyan
while ($elapsed -lt $maxSeconds) {
  try {
    $ps = docker compose ps 2>$null | Out-String
  } catch {
    Start-Sleep -Seconds $interval
    $elapsed += $interval
    continue
  }

  if ($ps -match '(?im)mysql[\s\S]*?(healthy|Up)') {
    Write-Host "Database container looks healthy/Up." -ForegroundColor Green
    break
  }

  Start-Sleep -Seconds $interval
  $elapsed += $interval
}

if ($elapsed -ge $maxSeconds) {
  Write-Warning "Timed out waiting for mysql container. Check 'docker compose ps' and 'docker compose logs mysql'."
}

Write-Host "Running migrations and seeder inside php container..." -ForegroundColor Cyan
try {
  docker compose exec php php spark migrate -v
  docker compose exec php php spark db:seed PuihahaSeeder
  Write-Host "Migrations and seeder completed." -ForegroundColor Green
} catch {
  Write-Warning "Failed to run migrations/seeders. You can run them manually inside the php container."
}

if (-not $NoBrowse) {
  $url = 'http://localhost:8090/'
  Write-Host "Opening $url" -ForegroundColor Cyan
  Start-Process $url
}

Write-Host "Done. If you need to stop everything: docker compose down" -ForegroundColor Yellow
