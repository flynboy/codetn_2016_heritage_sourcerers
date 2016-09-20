Hello CodeTN on Laravel
=======================

A basic 'Hello World' app developed for [CodeTN][codetn] using the [Laravel][laravel] framework.

[![CodeTN][shield-codetn]](#)
[![MIT licensed][shield-license]](#)


Table of Contents
-----------------

  * [First Steps](#first-steps)
  * [Requirements](#requirements)
  * [Out of The Box](#out-of-the-box)
  * [Additional Resources](#additional-resources)
  * [License](#license)


First Steps
-----------

This repo is hosted on [GitHub][github] and we'll be using the [Cloud9][c9] IDE environment to develop and
host your application.

You'll need an account for both, so head on over to GitHub and login or [join](https://github.com/join)
and to c9 and [signup](https://c9.io/signup).

When creating your workspace, chose the PHP Woorkspace and use the GitHub URL:

     https://github.com/CodeTN/hello_codetn_laravel.git

After creating your workspace, run each of these command (ONLY run when FIRST creating your workspace):

  1. sudo composer self-update
  2. sudo composer update
  3. sudo service mysql start
  4. mysql-ctl install
  5. Use output from Root User/Database Name in next steps
  6. cp .env.example .env
  7. Edit .env, update the following
  - APP_KEY to random 32 character string (ie: ujra6NCIvecaVVhgtSlNLrHvHFaWZXVq)
  - DB_DATABASE to Database Name from steps 4-5 above
  - DB_USERNAME to Root User from steps 4-5 above
  - DB_PASSWORD to an empty value (no password)
  8. php artisan migrate:install
  9. sudo vim /etc/apache2/sites-enabled/001-cloud9.conf
  - Change DocumentRoot to /home/ubuntu/workspace/public
  10. npm install --global gulp-cli
  11. npm install
  12. gulp

Requirements
------------

Hello CodeTN on Laravel uses or requires the following:

  * [PHP][php] >= 5.5.9
  * [Composer][composer]
  * [Laravel][laravel] 5.2


Out of The Box
--------------

What's included out of the box? This repo provides a base app to get started on your project.
Its aim is to remove a few of the tougher decisions you might face at the start of your project.

  * [Bootstrap 3][bootstrap]
  * User Registration/Authentication [built in][user-auth]


Additional Resources
--------------------

Some additional resources to consider:

  * [Laravel Documentation][laravel-docs]
  * [Laracasts][laracasts]
  * [Git Cheat Sheet][git-cheat-sheet]
  * [Great Schools Partnership][great-schools]
  * [Gulp][gulp]


License
-------

Hello CodeTN on Laravel is open-sourced software licensed under the [MIT license][mit-license].



[bootstrap]: http://getbootstrap.com/
[c9]: https://c9.io/
[codetn]: http://codetn.org/
[composer]: https://getcomposer.org/
[git-cheat-sheet]: https://training.github.com/kit/downloads/github-git-cheat-sheet.pdf
[github]: https://github.com/
[great-schools]: http://www.greatschoolspartnership.com/
[gulp]: https://github.com/gulpjs/gulp
[laracasts]: https://laracasts.com/
[laravel]: https://laravel.com/
[laravel-docs]: https://laravel.com/docs/
[mit-license]: http://opensource.org/licenses/MIT
[php]: http://php.net/
[shield-codetn]: https://img.shields.io/badge/codetn-laravel-brightgreen.svg
[shield-license]: https://img.shields.io/badge/license-MIT-blue.svg
[user-auth]: https://laravel.com/docs/5.2/authentication
