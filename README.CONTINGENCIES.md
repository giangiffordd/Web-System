# Contingency & Recovery Plan — Puihaha

Last update: 2025-10-07

This short contingency guide helps you recover, run, and troubleshoot the Puihaha app quickly (useful when moving to another machine or when something goes wrong).

Keep it short — follow the Quick checklist first, then reference the troubleshooting section if needed.

## Quick checklist (the 2-minute recovery)
- Ensure Docker Desktop is installed and running.
- From the project root run (PowerShell):

    docker compose up --build -d
    docker compose exec php php spark migrate -v
    docker compose exec php php spark db:seed PuihahaSeeder

- Open the app at: http://localhost:8090/ (services: /services, phpMyAdmin: http://localhost:8091/)

If these three steps succeed, the site should be live with seeded content.

## If you don't have Docker (school PC restrictions)
- Option A (recommended): Zip the project on your personal device, transfer to school PC, and run Docker if allowed.
- Option B (no Docker): Install PHP 8.x, Composer, and MySQL locally. Edit `backend/app/Config/Database.php` to point to local DB (host=127.0.0.1, user/app, password/app, db=app). Then run migrations and seeders via `php spark` from `backend/`.

## Troubleshooting (common problems)

- "Got packets out of order" or gibberish in browser when opening port 3390: You opened the MySQL port (3390) in a browser. Stop — MySQL uses a binary protocol. Use phpMyAdmin (8091) or a MySQL client to interact with DB.

- Containers not starting / unhealthy:
  - Run `docker compose ps` and `docker compose logs <service>` (e.g., `docker compose logs mysql --tail 200`).
  - If MySQL shows startup errors, check disk/volume permissions and container logs for specific messages.

- Migrations fail with database connection errors:
  - Confirm Docker containers are up and MySQL is reachable from the php container.
  - Ensure `backend/app/Config/Database.php` uses host `mysql` (container internal) when running in Docker.

- Ports in use (8090, 8091, 3390):
  - If a port is already taken, either stop the conflicting service or edit `compose.yaml` to remap host ports.

## Backups & rollback

Quick DB backup (host machine with mysql client):

    # create a SQL dump of the app database (host-side client)
    docker run --rm mysql:8.0 sh -c "exec mysqldump -h host.docker.internal -P 3390 -u app -p'app' app" > puihaha_backup.sql

To rollback a migration (careful — this deletes schema changes):

    # inside the php container
    docker compose exec php php spark migrate:rollback -n 1

## Sending email from Contact form
- The contact form in this demo shows a success message but does not send real email. To enable email, configure SMTP in `backend/app/Config/Email.php` or use CodeIgniter's Email service with a provider (SendGrid, SMTP). Keep credentials out of git — use environment variables or `.env`.

## Moving to school PC — the short steps
1. Push repo to GitHub (or zip project and copy it).
2. Install Docker Desktop (if allowed). If not permitted, follow the local install steps above.
3. Run the Quick checklist commands.

## Contact / Escalation
- If something blocks you that you can't fix, collect the following and share it with your dev contact or in a support request:
  - `docker compose ps` output
  - `docker compose logs --tail 200` for the failing service(s)
  - Output of `docker compose exec php php spark migrate -v` if migrations fail

## Footer
Keep this file updated with any environment-specific changes (ports, credentials, or new services). If you want, I can add a `start.ps1` helper script that runs the Quick checklist for you.
