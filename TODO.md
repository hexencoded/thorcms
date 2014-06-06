# To-Dos

These To-Do's are a very basic guideline for developers
that want to contribute with the project.


## Common
* Documentation (phpdoc and online)
* Test all Thor classes

## Main (thorcms/thorcms)
* Default theme with pageables support, breadcrumbs
* User account views (login, signup, profile, ...) based on Confide
* Login/signup with oauth? (github, twitter, ...)

## Admin package
### Must do
* Activate permission filters in core resources
* Permission and role assignments
* Improve and fix current CRUDs (users, languages, pages, permissions, roles)
* Restrict some operations (delete last admin user, change access_backend permission, delete home page, ...)
* Use a base Admin Controller
* Image management (on imageable models), using dropzonejs

### Possible features

It doesn't mean that all features listed here should be implemented,
it's only an idea of what we expect and plan for this CMS.

* Custom fields (polymorphic table, with multilingual support)
* Menus (multilevel, multilingual)
* Blocks or widgets (optionally multilingual)
* Terms (tags, categories, ... and other taxonomies,  multilingual)
* Themes (with editor. edition should need a permission)
* Imageable thumbnail administrator (themes could define dimensions)
* Modules (set of models, admin views, etc.)
* Plugins (addons, hooks, tools, etc.)
* Integration with laravel elFinder package (custom look and feel)
* Tools (core tools like sitemap generator, etc.)
* Settings (app settings)
* User preferences (admin preferences for that user)
* Ability to choose between markdown or wysiwyg editors
* Store files in the cloud (with flysystem)
* Block user on X login attempts (would be optional)
* Live, inline edition of content?

Interesting libraries for admin UI
* https://github.com/neokoenig/jQuery-gridmanager
* http://bootboxjs.com/
* http://fabien-d.github.io/alertify.js/
* https://github.com/geedmo/yamm3

## Framework package
* Route to pageable resolver

## Generators package
* Compatibility with translations in controllers and views
* Separate normal and translatable fields with bootstrap tabs
* Separate SEO fields in another tab, with Google search-like preview (like Yoast SEO)

## Language package
* Translation manager (artisan and web interface) using lang files (no db)

## Models package
* Seed permissions for core admin resources

## thorcms.com website
* Improve content with features, etc
* Documentation
* Video tutorials
* Links to issues, google group, etc.