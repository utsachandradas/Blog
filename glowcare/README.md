# GlowCare - Beauty & Skincare WordPress Theme

A professional, elegant, and modern WordPress theme designed specifically for beauty, skincare, and lifestyle bloggers.

## Features

- **Responsive Design**: Fully responsive and mobile-friendly layout
- **Clean Typography**: Uses Playfair Display for headings and Montserrat for body text
- **Beauty-Focused Color Palette**: Soft, elegant colors perfect for beauty and skincare content
- **Post Thumbnails**: Full support for featured images
- **Widget Areas**: Sidebar and footer widget areas
- **Custom Menus**: Primary and footer navigation menus
- **Search Functionality**: Built-in search functionality
- **Comments Support**: Full comment thread support
- **SEO Friendly**: Clean, semantic HTML structure
- **Translation Ready**: Full translation support with text domain

## Installation & Demo Content

To get started with the GlowCare theme and its demo content, follow these steps:

### Option 1: All-in-One Package (Recommended)

1.  **Download the `glowcare-full-package.zip`** from the repository root.
2.  **Unzip** this package on your local computer.
3.  Inside the unzipped folder, you will find:
    *   The `glowcare` theme folder (which can be zipped into `glowcare.zip` for direct WordPress upload).
    *   The `demo-content.xml` file.

### Option 2: Separate Files

Alternatively, you can download the `glowcare.zip` and `demo-content.xml` files directly from the repository root.

### Theme Installation Steps

1.  **Via WordPress Admin (Recommended)**:
    *   Go to your WordPress Dashboard > **Appearance** > **Themes**.
    *   Click **Add New** at the top.
    *   Click **Upload Theme**.
    *   Choose the `glowcare.zip` file (either from the unzipped full package or downloaded separately) and click **Install Now**.
    *   Once installed, click **Activate**.
2.  **Via FTP/cPanel**: 
    *   Unzip the `glowcare.zip` file.
    *   Upload the entire `glowcare` folder to your WordPress installation's `/wp-content/themes/` directory.
    *   Go to WordPress Admin > Appearance > Themes and **Activate** the GlowCare theme.

### Demo Content Import Steps

1.  In your WordPress Dashboard, go to **Tools** > **Import**.
2.  Find **WordPress** in the list and click **Install Now** (if the WordPress Importer plugin is not already installed).
3.  Once installed, click **Run Importer**.
4.  Click **Choose File** and select the `demo-content.xml` file (from the unzipped full package or downloaded separately).
5.  Click **Upload file and import**.
6.  On the next screen, you can assign posts to an existing user or create a new one. Make sure to check the box to **Download and import file attachments**.
7.  Click **Submit**.

Once the import is complete, you will have sample posts, pages, and categories populating your site, giving you a great starting point for customization.

## Theme Structure

```
glowcare/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── inc/
│   └── template-tags.php
├── template-parts/
│   └── content/
│       ├── excerpt.php
│       ├── single.php
│       └── page.php
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── single.php
├── page.php
├── archive.php
├── search.php
├── sidebar.php
└── 404.php
```

## Color Palette

- **Primary**: #d4a373 (Warm Gold)
- **Primary Hover**: #bc8a5f (Darker Gold)
- **Background**: #fffaf9 (Soft Cream)
- **Text**: #4a4a4a (Dark Gray)
- **Headings**: #2d2d2d (Very Dark Gray)
- **Footer**: #2d2d2d (Dark)

## Customization

### Adding Custom Styles

Edit `style.css` to customize the theme appearance.

### Adding Custom Functionality

Edit `functions.php` to add custom theme functionality.

### Widget Areas

The theme includes two widget areas:
- **Sidebar**: For post and page sidebars
- **Footer Widgets**: For footer content

## Support

For support, please visit the theme repository or contact the theme author.

## License

This theme is licensed under the GNU General Public License v2 or later.
