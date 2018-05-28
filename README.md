# Simple-E-learning-platform-in-laravel

------------------------------------------------

* The project has three user roles (Admin, Author, and Student).
* Laravel framework in used which uses MVC architecture.
* Various laravel functionalities like migration, seeding, requests and MVC are used.
* Every user has different and restricted (Author and student) view.

## Admin
* Can perform CRUD operations on users and assign roles to them.
* Can perform CRUD operations on courses.
* Can access the pages of course listing and user listing.

## Author
* Can create and view all courses.
* Can update and delete only owned courses.
* Has author dashboard where he/she can see all enrollment requests.
* Has a profile page to update personal details.

## Student
* Can view basic info of all courses like title, thumbnail, general description (not the actual course data), author, creation date.
* Can send enroll request to the course author.
* Can only read course contents which he/she is enrolled in.
* Can unenroll himself/herself from a course.
* Can mark a course as completed.
* Has student dashboard where he/she can see all the enrolled courses.
* Has a profile page to update personal details.

## Guest/Visitor
* Can view listing of all the courses.
* Can register as a author or student.


