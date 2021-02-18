# Anzera Challenge with Laravel

# What did I do?

- Created models: User, Category, Product. Relation definitions:
    - User -> Product: One to Many
    - Product -> User: Many to One
    - Category -> Product: One to Many
    - Product -> Category: Many to One
- Create foreign key between products-users and products-categories tables in migration.
- Defined CRUD REST route with extending `Illuminate\Routing\Router` class. The class is here: `App\Extended\Router`. This is added to here: `bootstrap/app.php` file.
  Detailed info is [here](#router).
- Example middleware: App\Http\Middleware\PrintJsonResponse
- Sessions disabled from `App\Http\Kernel`.

## <a name="router"></a> REST CRUD router

Example usage:
<br />
`Route::restCrud('products', \App\Http\Controllers\Products::class);`

This is creating these routes:

```
GET       /photos/{photo}/comments    index    photos.comments.index
GET       /photos/{photo}/comments/create    create    photos.comments.create
POST      /photos/{photo}/comments    store    photos.comments.store
GET       /comments/{comment}    show    comments.show
GET       /comments/{comment}/edit    edit    comments.edit
PUT       /comments/{comment}    update    comments.update
DELETE    /comments/{comment}    destroy    comments.destroy

```

## What about authentication?

Challenge rules didn't required any authentication. But I just added and configured Passport library to project. We can use it if we need. In first we must write an
Authentication controller for login-logout operations.

## Bugs and TODOs

All of these must be solve:

- Showing 404 if a request not validated.






