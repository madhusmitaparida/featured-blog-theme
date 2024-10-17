# Featured Blog WordPress Theme
A custom WordPress theme designed for a featured blog layout. The theme displays posts in a dynamic grid format with a modern, responsive design. The layout consists of 5 columns and 2 rows with unique post presentation styles.
## Table of Contents
1. [Features](#features)
2. [Installation](#installation)
3. [Usage](#usage)
4. [Customization](#customization)
5. [Contributing](#contributing)
6. [License](#license)
## Features
- 5-column, 2-row grid layout for featured blog posts.
- Fully responsive design.
- Customizable header and footer.
- Dynamic display of post title, featured image, and excerpt.
- Supports WordPress's loop functionality to fetch posts.
## Installation

1. **Download the theme**: Clone the repository or download it as a ZIP file.
    ```bash
    git clone https://github.com/yourusername/your-theme-repo.git
    ```

2. **Upload the theme**: Upload the theme folder to your WordPress installation in the `/wp-content/themes/` directory.
3. **Activate the theme**: Go to your WordPress Dashboard > Appearance > Themes, and activate the `Featured Blog WordPress Theme`.
4. **Set up the featured layout**: Create a new page and assign the "Featured Blog Layout" template from the Page Attributes dropdown.
## Usage

- To display your blog posts in the featured layout, create or edit a page in the WordPress admin.
- Select the "Featured Blog Layout" template in the "Page Attributes" section.
- Add new blog posts, including a featured image and excerpt.
- The blog posts will automatically populate in the 5-column, 2-row layout on the front end.

For customization, modify the `template-featured-blog.php` file or update the CSS in `style.css` as needed.
## Customization

### Changing the Logo
To change the logo:
- Navigate to the WordPress Dashboard > Appearance > Customize > Site Identity.
- Upload a new logo in the "Logo" section.
- Save and publish your changes.

### Adjusting the Grid Layout
You can modify the grid layout by updating the CSS rules in `style.css`:
- `.featured-blog-grid`: Controls the grid structure.
- `.featured-post`: Controls individual post styling.
## Contributing

Contributions are welcome! If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are encouraged.

1. Fork the repository.
2. Create a new branch for your feature or fix.
3. Submit a pull request with a detailed description of your changes.
## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
## Screenshots

![Featured Blog Layout](path-to-your-screenshot.png)
## Credits

- [WordPress](https://wordpress.org/)
- [Bootstrap](https://getbootstrap.com/) for responsive grid layout.
