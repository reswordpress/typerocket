## TypeRocket 2.0.0
TypeRocket makes coding advanced WordPress themes a blast. Be good looking, do cool stuff and write less code.

http://typerocket.com

### Requirements

- WordPress 4.0+
- PHP 5.3+

### Language

- English only

### What can you do with TypeRocket?

- You can make make post types, taxonomies and metaboxes with one line of code.
- Add fields to post types, comments, metaboxes, option pages, user profiles and even on the front-end inside theme template files.
- You can access a number of pre-made TypeRocket plugins for features like SEO and Theme Options installed directly into your theme.

### Story

Plugins. We wanted our themes to look beautiful but using plugins made a mess of things. Constant updating and security bugs were the norm with plugins and we didn't want compromise. The plugin architecture is nice but using plugins for the design of client sites created a lot of problems. With plugins migrating from development to production was a big issue. Adding plugins to fix plugins didn't feel like the right solution.

We needed beautiful themes that were easy to manage; and didn't hassle our clients for updates or slow down their sites. And no plugins!

Building TypeRocket to fixes these problems has been a pure joy. No more updates breaking design and best of all... Every feature lives right in the theme so launching client sites is a celebration and not a disaster.

When we decided to share TypeRocket it was an easy decision. We want you to be good looking, do cool stuff with less code too.

TypeRocket is just a tool. We want you to be amazing.

Thanks,

Kevin

### Ready to get started?

Visit TypeRocket http://typerocket.com to get access to the tutorials and documentation.

### Book Post Type Example

Gracefully configure WordPress without needing hooks.

- Add a "Book" post type
- Add a custom menu icon to "Book" (200+ icons)
- Add an "Author" taxonomy to "Book" post type

```php
// In your themes functions.php
include( 'typerocket/init.php' );

// Add taxonomy with custom "name" gracefully
$bookAuthor = tr_taxonomy('Author')->setId('book_author');

// Add post type with icon and taxonomy gracefully
$book = tr_post_type('Book')->setIcon('book')->apply($bookAuthor);
```

- Add a Metabox to "Book"
- Set custom Title placeholder text

```php
$bookDetails = tr_metabox('Details');
$book->apply($bookDetails)->setTitlePlaceholder('Enter Book Title Here');
```

- Use debug mode to get metabox content provider function
- Add custom fields for ISBN and Book Cover

```php
function add_meta_content_details() {
    tr_form()->text('ISBN Number')->image('Book Cover');
}
```

![GitHub Logo](http://typerocket.com/github/typerocket-book-example.png)

### Designers

We made Typerocket with design in mind first. Inside and out. Writing your code to replace plugins is super simple. We give you a development mode so building your custom feature is as simple as copy and paste. Don't let that fool you though. TypeRocket uses all the best available programing patterns that are compatible with WordPress.

### Developers

- We know SOLID and avoid globals.
- We believe in reducing dependencies and building a system that is flexible and secure.
- You can Build your own custom Fields.
- You can create custom Controllers to manage REST requests in TypeRocket.
- Filter and validate before saving data to the database with hooks.
- TypeRocket is fast! We use autoload (PSR-4) against the TypeRocket namespace so there are no conflicts.
- Rich commenting and doc blocks to enhance IDE and coding experience.

### Documentation

https://typerocket.com/documentation/

### Icons

http://icomoon.io/#preview-free licensed under the GPL.