<!--
Purpose: Guidance for AI coding agents (GitHub Copilot/assistant) working on this repo.
Keep this short, specific, and actionable. Update when routing, data-sources, or build flows change.
-->

# Copilot / AI Assistant Instructions

Brief: This is a small Laravel (v12) portfolio site where most content is driven from a JSON file. The goal for an AI assistant is to make safe, minimal, and testable changes that follow the project's existing conventions.

- **Big picture**: Laravel app (PHP ^8.2) using Blade views and Vite for frontend assets. Content for pages (home, projects, about, experience) is stored in `resources/data/database.json` and read by controllers at runtime.

- **Key files / entry points**:
  - `routes/web.php` — route definitions mapped to controllers.
  - `app/Http/Controllers/HomeController.php` and `app/Http/Controllers/PageController.php` — controllers read `resources/data/database.json` and pass arrays into Blade views.
  - `resources/data/database.json` — single source of truth for portfolio content; add/update project entries here rather than hardcoding in views.
  - `resources/views/*.blade.php` and `resources/views/layouts/main.blade.php` — UI templates. Use existing layout/partials conventions.
  - `public/assets/images/` — static assets referenced with `asset('assets/images/...')`.

- **Build & dev workflows (executable commands)**:
  - Full setup (installs, migrations, build): `composer setup`
  - Start development set (server, queue, logs, vite): `composer dev` (runs `php artisan serve`, queue worker, pail, and `npm run dev` concurrently)
  - Vite frontend dev: `npm run dev`
  - Build production assets: `npm run build`
  - Run tests: `composer test` or `php artisan test`

- **Project-specific conventions & patterns**:
  - Content is data-driven: update `resources/data/database.json` for copy, project entries, and images. Controllers expect specific keys (e.g. `projects[].title`, `projects[].github_link`, `home.name`, `home.resume_link`). Keep JSON structure consistent.
  - `PageController::__construct()` loads the JSON once and stores it in `$this->portfolio`. Keep heavy I/O changes mindful of this pattern.
  - Views assume `layouts.main` exists and sections are named `content`. Follow the same Blade section naming for new views/partials.
  - Images: when adding a project with an `image` filename, place the file under `public/assets/images/projects/` and reference it via `asset('assets/images/projects/' . $project['image'])`.

- **Editing rules for AI** (be conservative, make minimal diffs):
  - Prefer editing `resources/data/database.json` for content changes instead of modifying controllers or views.
  - If adding routes, update `routes/web.php` and create corresponding controller methods and `resources/views/<name>.blade.php` that extend `layouts.main`.
  - If changing data keys, update both the JSON and all controller/view references in the same PR.
  - For any change that touches infrastructure (composer.json, package.json, migrations), include explicit developer instructions in the PR description (commands to run and why).

- **Tests & linters**:
  - Unit/feature tests use Laravel's testing setup. Run `composer test` to execute tests.
  - Code style: `laravel/pint` is available as a dev dependency — prefer to run it before committing if making PHP formatting changes.

- **External integrations & environment**:
  - Database: migrations exist; project composer scripts create an SQLite file during `post-create-project-cmd`. For local testing use `.env` with appropriate `DB_CONNECTION` (sqlite is fine for quick tests).
  - Vite + Tailwind for frontend. `npm run dev` / `npm run build` required when editing frontend assets or CSS.

- **Examples (copy verbatim when appropriate)**:
  - Load portfolio JSON in a controller: `File::get(resource_path('data/database.json'))` and `json_decode($data, true)` — see `PageController.php`.
  - Route to project page: `Route::get('/projects', [PageController::class, 'projects'])->name('projects');` (see `routes/web.php`).

- **When to ask for human review**:
  - Any DB schema or migration changes.
  - Changes that modify authentication, queue, or background processing (these scripts run in `composer dev`).
  - Non-trivial refactors that change data shape or view layer contracts.

If any of the above is unclear or you want a different level of detail (more examples, testing steps, or a checklist for PRs), ask and I'll iterate.
