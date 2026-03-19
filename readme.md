## Assignment 2: Custom WordPress Theme

### WordPress Theme Structure & Architecture

Brief description of understanding. Use any combination of markdown techniques. Should be more than 3 sentences.

### The Loop & Template Tags

Brief description of understanding. Explain have_posts(), the_post(), and at least 3 template tags you used. Should be more than 3 sentences.

---

## Rubric

| Criteria                                       | Pts | Description                                                                                                                                                                                                                                                                                                           |
| ---------------------------------------------- | --- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Repository Link Submission                     | 2   | Submit the public GitHub repository link for this assignment. It should be something like https://github.com/username/sp26-413-homework-2. The repo must contain only your theme folder and readme.md — not a full WordPress installation also include screenshots showing the theme working with post and page live. |
| Document: Theme Structure & Architecture       | 2   | In your readme.md, explain the WordPress theme file structure — what files are required, what each one does, and how they relate to one another. Use any combination of markdown techniques. Should be more than 3 sentences.                                                                                         |
| Document: The Loop & Template Tags             | 2   | In your readme.md, explain how The Loop works and describe at least 3 template tags you used and what they output. Use any combination of markdown techniques. Should be more than 3 sentences.                                                                                                                       |
| Theme Setup & functions.php                    | 4   | The theme must activate in the WordPress admin without errors. functions.php must properly enqueue the stylesheet (no hardcoded <link> tags in header.php), enable theme support for title-tag, post-thumbnails, and custom-logo, and register a navigation menu — all using correct WordPress hooks.                 |
| Template Files: header, footer, index, single  | 6   | All four core template files must be present and functional. header.php and footer.php must call wp_head() and wp_footer() respectively. index.php must implement a complete Loop with title, date, excerpt, and featured image. single.php must display full post content with a proper heading hierarchy.           |
| Additional Template: page.php or archive.php   | 2   | Create one additional template that implements its own Loop appropriate to the page type. Must use semantically correct HTML structure.                                                                                                                                                                               |
| Visual Design — Editorial Research & Execution | 2   | The theme must demonstrate research-informed visual design appropriate for a news publication. Graded on: typographic hierarchy, intentional use of whitespace and color, and a structured layout that goes beyond browser defaults. CSS must be original.                                                            |
