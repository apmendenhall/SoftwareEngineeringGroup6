# SoftwareEngineeringGroup6

---------------------------
BOOK DETAILS
---------------------------

Adding Books and Authors
----------------------------

To use the postman versions of the code, either run the code locally or use the link https://angelinne.com/BookDetailsPostman.php
The first entry with be either 'book' or 'author' (with a value of 1) depending on what you want to add. The next values for book will be:
ISBN, 
book_name, 
description, 
price, 
book_author, 
publisher_book, 
year, 
genre, 
copies_sold

For author, the values will be:
first_name, 
last_name, 
biography, 
publisher_author

To use the Command Line verision, open CMD and put in:
php test.php [book/author] [args...]

To use the form version of the code, open bookform.php or authorform.php in your browser or go to https://angelinne.com/book.php for books or https://angelinne.com/author.php for author.


Searching for Books
----------------------------

To use the postman versions of the code, either run the code locally or use the link https://angelinne.com/BookDetailsSearchPostman.php
The first entry will be 'mode'. Use the value 1 for author and the value 2 for ISBN. The next entry will be 'entry' and this will be by the data you would like to search for. 

To use the Command Line version, open CMD and put in:
php search.php [ISBN/author] [args...]

To use the form version of the code, open searchform.php in your browser or go to https://angelinne.com/search.php

---------------------------
BOOK REVIEWS
---------------------------

This API allows you to Review a book where, you *may* leave a Comment, a Rating, Or both

The API is available at `localhost:8080/api/v1/bookie`

## Endpoints ##

### All Reviews ###

GET `/`

Returns all Stored Reviews within the Database. Along with:
- The Reviews Timestamps 
- The Average Rating of the Book
- The Number of Rates on the Book
- The Reviews' Book Rating and Comments
- Boom Review ID

### Submit a Review ###

POST `/`, 

Along with Submitted JSON Content-Type including Review in Raw Data Format.

Allows you to submit a new Review.

The request body needs to be in JSON format and include the following properties:

 - `bookTitle` - Integer - Required
 - `bookReview` - String - Optional
 - `bookRating` - Integer - Required

Example
```
POST '/'

{
  "bookTitle": "Harry Potter and the Sorcerer's Stone",
  "bookReview": "7"
}
```
The response body will contain the Status Code along with *No* Message.
If a Post Request is made on a Book that has Existing Reviews, The Book Rating is Used
to Calculate the New Book Rating Average of the Specific Book at hand. Along with this,
The Amount of Book Ratings is Incremented for this Book. 

### Update a Review ###

Put `/studentID?{key being Updated = Updated Value}` ID-Type: Long

Allows you to Update a review and change only the Review and/or the Rating.

### Deleting a Review ###

DELETE `/studentId`

Allows you to Delete a review with Student ID: {`studentId`}


# WishlistFinal

WishlistFinal is a Java library that focuses on the creation of a wishlist and updating to a MYSQL database. 

Features include:
- Ability to create a wishlist of books that belongs to user and has a unique name
- Ability add a book to a user’s wishlist
- Ability remove a book from a user’s wishlist into the user’s shopping cart
- Ability list the book’s in a user’s wishlist


## Usage

# localhost:8080/wishList/{userId}
Will grab the UserId and find the corresponding Wishlist and respond/print the userid, the wishid, the books and the wishlist name to the user or individual.

# localhost:8080/wishList
Will create a wishlist inputting the needed information from the constructor which includes:

    private List<String> books;
    private String wishlistName;
    private int id;
    private String userId;


# localhost:8080/wishList/add/{id}/{bookname}
Will add a book from the Wishlist when one inputs the wishid and the book name in addition will check if the book already does exist in the wishlist and if it does it will proceed to give error.

# localhost:8080/wishList/delete/{id}/{bookname}
Will delete a book from the Wishlist when one inputs the wishid and the book name in addition it will go ahead and add the book over to the User's shopping cart.


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.




# Book Browsing & Sorting:

## Purpose of feature
This feature allows the user to retrieve books from the database based on specific parameters.
The books can be sorted based on genre, copies sold, and ratings.


## Available Functions
booksWithXgenre(int x) - Retrieves all books from the database whose genre is 'x' where 'x' is an input of the user's choice.<br />
topKSellers(int k) - Retrieves the top 'k' books with the most copies sold where 'k' is an integer of the user's choice.<br />
booksOfXRatingAndHigher(int x) - Retrieves all of the books that have a rating of 'x' and higher where 'x' is an integer from 1 - 5 and 
it is an input of the user's choice.<br />
XBooksAtATime(int X, int start) - Retrieves 'x' books from the database where the indices of the rows fall within the interval <id>[start, start + x),
where 'x' is the input of the user's choice and 'start' is also an input of the user's choice.<br />

## GetMappings for each function
booksWithXgenre(int x) - /bookswithxgenre<br />
topKSellers(int k) - /topksellers<br />
booksOfXRatingAndHigher(int x) - /booksofxratingandhigher<br />
XBooksAtATime(int X, int start) - /xbooksatatime<br />


## How to use
In order to use this feature, you must follow the following template to make calls:<br />
"localhost8080:/<id>[DESIRED GET MAPPING]?[OPTIONAL_PARAMETER_1]&[OPTIONAL PARAMETER 2]"<br />
For example, if you wanted to retrieve all of the books with the genre "mystery", you would enter the following:<br />
localhost8080:/bookswithxgenre?x=mystery<br />
This will retrieve all of the books with that exact genre.

## Examples
Goal: Retrieve books with "horror" genre<br />
GET Call: localhost8080:/bookswithxgenre?x=horror

Goal: Retrieve the top 10 sellers<br />
GET Call: localhost8080:/topksellers?k=10

Goal: Retrieve books with a rating of 3 and higher<br />
GET Call: localhost8080:/booksofxratingandhigher?x=3

Goal: Retrieve 5 books starting at row 3 in the database (retrieve books from the range [3, 8)<br />
GET Call: localhost8080:/xbooksatatime?x=5&start=3








