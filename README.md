# Conference Website Template

This project offers a DIY template for making your own conference website. 

It is programmed in `html`, `php`, `css` and `JavaScript`.

Feel free to `git clone` the project and adjust the content to your needs.

## Functionalities

The template includes the following funcionalities:

1. Home page with logo and text [(`Files/index.php`)](Files/index.php)

2. Navigation bar through the pages [(`Files/logo_navbar.php`)](Files/logo_navbar.php)

3. Info page to present the scope of the conference [(`Files/InfoPage.php`)](Files/InfoPage.php)

4. Jury page to include the colleagues participating as jurors [(`Files/JuryPage.php`)](Files/JuryPage.php)

5. Location page to sum up information on the venue, city of conference and possibilities for accommodation [(`Files/LocationPage.php`)](Files/LocationPage.php)

6. Program page, where the talks of the conference are presented in a tabular [(`Files/Program.php`)](Files/Program.php)

7. Sign up page, where a form is created for the participants to sign up [(`Files/subscribe_form.php`)](Files/subscribe_form.php)

8. Contact page, where a form enables sending a message to the organizing committee for any interested party [(`Files/contact_form.php`)](Files/contact_form.php)

9. Terms of use page [(`Files/terms_of_use.php`)](Files/terms_of_use.php)


## MySQL Database:

* Sign up and Contact form interact with a database created with the [`Files/conference_db.sql`](Files/conference_db.sql) script

* Scripts [`Files/login.php`](Files/login.php), [`Files/login_script.php`](Files/login_script.php) and [`Files/mail.php`](Files/mail.php) enable the interaction of the website with the database

* Password is passed via a hash function in order only for the hash of the password to be stored in the database

## JavaScript controls

The [`Files/check_entries.js`](Files/check_entries.js) script performs controls, ensuring that:

* First and last name consists only of letters

* All fields are filled

* Email has the format `text@text.text`

* Telephone number consists only from digits and has a length between 7 and 10 digits. You need to adjust this.

* Username and password are  6-8 latin characters. You need to adjust this.
