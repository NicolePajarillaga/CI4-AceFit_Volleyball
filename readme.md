<a name="readme-top"></a>

<br/>
<br/>

<div align="center">
  <a href="https://github.com/NicolePajarillaga">
    <img src="backend/public/assets/profile.jpg" alt="ganda" width="130" height="100">
  </a>
<!-- * Title Section -->
  <h3 align="center">AceFit Volleyball</h3>
</div>

<!-- * Description Section -->
<div align="center">
AceFit Volleyball is your all-in-one shop for premium volleyball gear, apparel, and accessories—designed to support athletes and fans with quality products and reliable service.
</div>

<br/>

![](https://visit-counter.vercel.app/counter.png?page=zyx-0314/ci4-template)

<!-- ! Make sure it was similar to your github -->

---

<br/>
<br/>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rules-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

The **AceFit Volleyball** is a platform designed to manage volleyball-related services, user accounts, and product sales for the AceFit brand.


* **Purpose**: To provide a structured, visually appealing, and maintainable web system for AceFit Volleyball.  
* **Audience**: For administrators managing site content and users exploring AceFit’s volleyball brand, & design.

### Key Components

| Component                                                         | Description                                                               | Notes                                                    |
| ----------------------------------------------------------------- | ------------------------------------------------------------------------- | -------------------------------------------------------- |
| **Header Fragment**                     | Fixed top navigation bar with logo, navigation links, and login button.   | Styled using black-and-gold theme with hover animations. |
| **Footer Fragment**                     | Clean footer section consistent across all pages.                         | Uses gold accent and flex layout.                        |
| **Login Button Fragment**  | Gold rounded button with hover transition for “Login.”                    | Fragmented for easy reuse in navigation.                 |
| **Home Button Fragment**         | “Home” navigation link with arrow styling for better visibility.          | Improves UI flow and branding.                           |
| **Moodboard Page**                       | Showcases AceFit’s visual identity — color system, typography, and logos. | Uses gold (#f5c518), black, and white palette.           |
| **Roadmap Page**                            | Displays system development stages using cards and badges.                | Organized with flexible card layout and progress states. |
| **Card Fragments**        | Contains visual cards representing features or design samples.            | Each card styled with smooth hover transitions.          |
| **Button Fragments**       | Displays themed buttons within the Moodboard section.                     | Centralized for consistent look and interactivity.       |


 <!-- ! Start simple. Use these modules as **learning samples**; extend or replace them based on your project’s needs. -->

### Technology

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge\&logo=html5\&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge\&logo=css3\&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)

#### Framework/Library

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=for-the-badge\&logo=codeigniter\&logoColor=white)

<!-- ! Keep only the used technology -->

---

## Quick Start (Docker)

Run the development stack and the app (rebuild if needed):

```cmd
docker compose up --watch
```

- Create a controller (add --resource to scaffold resourceful methods if you like) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:controller Users
```

## Ports & Database

Defaults used in this project (host mapping):

| Service     | Host port |
|-------------|-----------:|
| nginx (app) | 8090      |


Database credentials used in examples and CI:

- Host: localhost
- Port: 3390
- Database: app
- User: root
- Password: root

Be careful: seeding and truncating are destructive operations — run only on local/dev environments unless you know what you're doing.

## Rules, Practices and Principles

<!-- ! Dont Revise this -->

1. Always prefix project titles with `AD-`.
2. Place files in their **respective CI4 folders** (`Controllers/`, `Services/`, `Repositories/`, `Views/`).
3. Naming conventions:

   | Type             | Case        | Example                   |
   | ---------------- | ----------- | ------------------------- |
   | Classes          | PascalCase  | `UserService.php`         |
   | Interfaces       | PascalCase  | `UserRepositoryInterface` |
   | DB tables/fields | snake\_case | `users`, `created_at`     |
   | Docs             | kebab-case  | `dev-manual.md`           |

4. Git commits use: `feat`, `fix`, `docs`, `refactor`.
5. Use **Controller → Service → Repository** pattern.
6. Assets (CSS/JS/img) live under `public/`.
7. Docker configs are at the repo root (`docker-compose.yml`, `nginx.conf`).
8. Docs are maintained in `/docs` (dev, technical, sop, commit, principles, copilot).

Example structure:

```
AD-ProjectName/
├─ backend/ci4/
│  ├─ app/Controllers/
│  ├─ app/Services/
│  ├─ app/Repositories/
│  ├─ app/Views/
│  ├─ public/
│  ├─ writable/
│  ├─ .env
│  └─ composer.json
├─ docker/               # Docker configs at root
├─ docs/                 # Manuals and project docs
├─ .gitignore
└─ readme.md
```

<!-- ! Dont Revise this -->

---

## Resources

| Title                   | Purpose                                                               | Link                                                                       |
| ----------------------- | --------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| ChatGPT                 | General AI assistance for planning application architecture and docs. | [https://chat.openai.com](https://chat.openai.com)                         |
| GitHub Copilot          | In-IDE code suggestions and boilerplate generation.                   | [https://github.com/features/copilot](https://github.com/features/copilot) |
| YouTube “UI/UX Design”  | Video tutorials on modern web interface layouts and patterns.         | [https://www.youtube.com](https://www.youtube.com)                         |
| Pinterest Design Boards | Inspiration for color schemes, typography, and component layouts.     | [https://www.pinterest.com](https://www.pinterest.com)                     |

<!-- ! Add what tools aided you -->
