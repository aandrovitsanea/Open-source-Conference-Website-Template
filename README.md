# Conference Website Template

This project offers a DIY template for making your own conference website. It is programmed in `html`, `php`, `css` and `JavaScript`.

Feel free to `git clone` the project and adjust the content to your needs.

## Functionalities

The template includes the following funcionalities:

1. Home page with logo and text.

2. Navigation bar through the pages

3. Info page to present the scope of the conference

4. Jury page to include the colleagues participating as jurors.

5. Location page to sum up information on the venue, city of conference and possibilities for accommodation

6. Program page, where the talks of the conference are presented in a tabular.

7. Sign up page, where a form is created for the participants to sign up.

8. Contact page, where a form enables sending a message to the organizing comittee for any interested party.


## MySQL Database:

* Sign up and Contact form interact with a database created with the `conference_db.sql` script.

* Password is passed via a hash funtion in order only for the hash of the password to be stored in the database.

## JavaScript controls

The `check_entries.js` script performs controls, ensuring that:

* First and last name consists only of letters

* All fields are filled

* Email has the format `text@text.text`

* Telephone number consists only from digits and has a length between 7 and 10 digits. You need to adjust this.

* Username and password are  6-8 latin characters. You need to adjust this.
