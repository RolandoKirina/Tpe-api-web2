# API REST for chocolate reviews resource.
A API REST for chocolate reviews.

# Import the database

- import from PHPMyAdmin (or any similar) database/tpe.sql

# Try with postman :

The endpoint of the API is: http://localhost/yourlocalfolder/chocolate-rest/api/reviews

# Get all the reviews: 
 Method http GET + http://localhost/yourlocalfolder/chocolate-rest/api/reviews.

 If the request succeeds, the "status code" will be 200 OK.

# Get a review :
  Method http GET + http://localhost/yourlocalfolder/chocolate-rest/api/reviews/idofreview

  If the request succeeds, the "status code" will be 200 OK.

# Delete a review: 

  Method http DELETE + http://localhost/yourlocalfolder/chocolate-rest/api/reviews/idofreview

  If the request succeeds, the "status code" will be 200 OK.

# Sort descending by id :

  Method http GET + http://localhost/yourlocalfolder/chocolate-rest/api/reviews?order=desc

  If the request succeeds, the "status code" will be 200 OK.

# Just filter by score (from one to five)
 Method http GET + http://localhost/yourlocalfolder/chocolate-rest/api/reviews?filter=numberintbetweenoneandfive

  If the request succeeds, the "status code" will be 200 OK.

# Just Paginate:
 Method http GET + http://localhost/yourlocalfolder/chocolate-rest/api/reviews?page=numberint&limit=numberint

  If the request succeeds, the "status code" will be 200 OK.
# Just Order asc or desc by field:
 Method http GET + http://localhost/yourlocalfolder/chocolate-rest/api/reviews?sortby=field&order=asc/desc
  If the request succeeds, the "status code" will be 200 OK.

# Filter, order and paginate :
  Method http GET + http://localhost/projects/chocolate_rest/api/reviews?filter=numberintbetweenoneandfive&sortby=field&order=asc/desc&page=numberint&limit=numberint

  If the request succeeds, the "status code" will be 200 OK.
  
# Filter and order :
  Method http GET + http://localhost/projects/chocolate_rest/api/reviews?filter=numberintbetweenoneandfive&sortby=field&order=asc/desc

  If the request succeeds, the "status code" will be 200 OK.
  
  
# Filter and paginate :
  Method http GET +http://localhost/projects/chocolate_rest/api/reviews?filter=numberintbetweenoneandfive&page=numberint&limit=numberint

 If the request succeeds, the "status code" will be 200 OK.
  
# Order and paginate : 
 Method http GET + http://localhost/projects/chocolate_rest/api/reviews?sortby=field&order=asc/desc&page=numberint&limit=numberint

If the request succeeds, the "status code" will be 200 OK.
  

# CREATE REVIEW WITH POST

First, you must be logged, for that you must authenticate.

# AUTH TOKEN:
 For get the token, you put in the URL :
 METHOD HTTP GET +  http://localhost/projects/yourlocalfolder/api/reviews/auth/token

 In postman (or similar like Thunder client), your request it in the part of authorization BASIC AUTH, with your user and password. That is important, because the authentication just  works with BASIC AUTH. 
 
 Then, when you have it, in postman, you put the token in the part of bearer token. 
 
 And then , with the method post you create the review. For that, in the url you put: 
 METHOD HTTP POST + http://localhost/projects/yourlocalfolder/api/reviews

In the http body, you put for example:
{   
    "review": "I love it",
    "score": 5,
    "fk_id_chocolate": 67
}
Finally, you submit the http body and the token.
If the request succeeds, the "status code" will be 200 OK.

 # Possible mistakes: 

 404 Not Found: This error can occur if the resource you want to access does not exist. For example, if you put page number 800 in the pagination, since there is not so much data in the table, it is likely to come out.
 
 400 Bad Request: This error can occur because the server was unable to interpret the request due to invalid syntax in the url.


If you misspell any of the parameters, by default reviews will be displayed in ascending order by review id.



