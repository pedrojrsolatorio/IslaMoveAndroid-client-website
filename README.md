# IslaMove Client Website – Custom WordPress Theme

Custom WordPress theme powering the IslaMove client website, built using a hybrid approach that combines a custom theme with modern tooling and multiple page-building workflows.

This project uses **Docker** for local development, **Composer for dependency management**, **Tailwind CSS for styling**, and **Advanced Custom Fields (ACF)** for structured content. Some pages are fully custom-coded while others are built using **Elementor** or the **WordPress Gutenberg Block Editor** as part of testing.

---

# Tech Stack

**Core Platform**

* WordPress (Classic Theme)

**Development Environment**

* Docker
* Composer

**Frontend**

* Tailwind CSS
* Custom JavaScript
* Custom PHP templates

**Content Tools**

* Advanced Custom Fields (ACF)
* Elementor
* Gutenberg Block Editor

---

# Project Structure

```
/my-theme
  /assets
    /fonts
    /icons
    tailwind.css

  /src
  /template-parts
  composer.json
  functions.php
  input.css
  style.css


docker-compose.yml in parent folder

```

Typical structure:

* **assets/** – compiled CSS, JS, images
* **template-parts/** – reusable components

---

# Development Setup

## 1. Clone Repository

git clone https://github.com/your-org/islamove-website.git
cd islamove-website

---

## 2. Start Docker Environment

docker compose up -d

This will start:
* WordPress
* MySQL
* PHP container
* Any additional services defined in `docker-compose.yml`

WordPress will typically be available at:
http://localhost:8000

---

## 3. Install Composer Dependencies

Create composer.json manually
Run composer dump-autoload

---

## 4. Install Frontend Dependencies

Check official website to install Tailwind.

---

## 5. Run Development Build

docker compose up -d
cd wp_data/wp-content/themes/my-theme
npm run dev

This will compile Tailwind and watch for changes.

---

# Styling

The project uses **Tailwind CSS** for styling.

Main Tailwind files are located in:
/assets/

# Page Building Strategy

The website uses **multiple content approaches** for testing the technology.

### 1. Custom Templates

Used for complex or high-performance pages.

Examples:

* Landing pages
* Feature pages
* Custom layouts

### 2. Elementor Pages

Used when:

* pages require visual editing
* designers need flexibility

---

### 3. Gutenberg Block Editor

Used for:

* simple pages

---

# Advanced Custom Fields (ACF)

ACF is used to manage structured content such as:

* hero sections
* repeaters
* flexible content blocks
* site options

ACF field groups are typically attached to:

* specific templates
* post types
* options pages

---

# Custom Code

Typical contents:

* theme setup
* helper functions
* custom hooks
* ACF integrations

---

# Deployment

Deployment depends on the hosting environment.

Typical steps:

1. Build assets

npm run build

2. Commit compiled assets if required by hosting.

3. Deploy theme to WordPress environment.

---

# Best Practices

* Prefer **custom templates** for performance-critical pages
* Use **Elementor sparingly** for marketing/editor-controlled pages
* Use **Gutenberg for content-first pages**
* Keep **ACF fields reusable and modular**
* Avoid heavy logic inside templates; place it inside `/inc`

---

# Contributors

IslaMove Developer

