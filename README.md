# ConferenceWeb

# Requirements to build a multi-conference website from course project
You are organizing a professional multi-conference called World Congress CS-IT Conferences in year 2017. The followings are the information about these multi-conferences. 
December 5th, 2016: Submission of draft papers (2000-5000 words), extended abstracts (600-2000 words) and abstracts for inter-disciplinary communication (300-600 words). 
January 25th, 2017: Notifications of acceptance. 
February 25th, 2017: Submission of camera-ready or final versions of the accepted papers 
July 6th, 2017: Conference Starts 
July 11th, 2017: Conference Ends 
The conference location is in Hilton Hotel, Madison, WI, USA 
You will create a conference web site front pages. Here are some of the information to be included at the first stage development. 
There are menu items on top of all pages which allow user to navigate to desired page. 
Some attendees are paper presenters. Before the conference starts, there are call-for-paper announcements on your web site. People can submit papers for possible presentation on these conferences.  
The registration fee is based on the status of the attendee. If the attendee is a student then the registration fee is lower than the regular registration. If a person or group of authors who have two or more papers to present on a particular conference, then the second paper will receive 50% discount of registration fee. For example, if regular registration fee is $600, then the second paper requires only $300 for the registration.
# Requirement for the step1 of this project 
(1)  Use HTML 5 and CSS to develop your web site 
(2)  For general user web page interface, there is a navigation menu on top of your pages 
      The navigation menu includes the following 
•	Home 
When clicked will go back to the home page which contains announcement of this conference 
•	Keynote Speakers  
              When clicked will direct the page to another page with five keynote speakers. Find five famous            people in IT and CS area and their biography and make up a title for their speeches 
•	General Information (it shall have a submenu of the following) 
1.	About the conference  The history of the conference, goal, etc. 
2.	Conference Fee (student and non-student have different rate) 
3.	Hotel Information location of the hotel encourage attendee to reserve hotel room as soon as possible. Mention that conference only blocks certain number of rooms until May 20th2017 for a discount rate, etc.
•	Call for paper 
1.	This page contains announcement of the conference event 
2.	 Choose at least five areas in IT and CS, for example: Computer Security, 
Artificial Intelligent, Software Engineering, Parallel Processing, Clouding Computing, Sematic web, Simulation and Modeling, Computer Visualization, Human Computer Interface, etc.. 
•	Important Dates  
Use the information given on first page of this handout 
•	Major Areas 
1.	List the research areas of your conferences and their possible topics 
2.	For example, if one of your area is Parallel Processing, the sub-areas or topics may be: Parallel algorithms, GPU computation, Scientific Parallel Systems, Etc 
3.	Search the internet and find different sub-areas of the areas you chose.  
•	Paper Submission 
(Don’t have to implement at this stage. Just say “Under construction when user click on this item) 
•	Reviewer Login  
(Don’t have to implement at this stage. Just say “Under construction when user click on this item) 
•	Online Registration  
Ask user to enter personal information and affiliation information such as first and last name, title, company or organization, address, phone number, email address, if user is an author of a presenter, a student, or a regular attendee. Only layout the form but no action needed at this phase. 
•	Conference Program  
 Make up conference program detail schedule; TBD 
•	Guidelines 
 Guidelines to authors how to prepare his/her papers. Author’s guide 
•	Comments and feedback 
Ask user to leave some comment and his/her contact information 
(3)  Your web site shall contain some images. When an image was hovered, it will enlarge this image a little bit and go back to normal size when mouse exit this image. You may create a folder to contain all images or use hyperlink to link images from other web sites from internet 
(4) Must use HTML web form and web form components such as text box, radio button, submit buttons etc.
Now that you have finished the step1. You will continue to finish this web site. 
The following are the things that you will do: 
 1.  Handle online registration. You will response to user’s submission by saying “Thank you  so  and  so  for  your  online  registration”  at  the  end  of  credit  card  payment.  You are encouraged to give the user a confirmation number although it is not required in this project to do so. You will store the information entered by the user to MySql database. You will then  ask  the  user  to  choose  credit  card  payment  on  another  page.  (You don’t have  to connect to the credit card company in this project to verify the credential,) but you will ask the user to enter credit card information: card type, number, expiration date, address, etc. You can assume user enter a valid credit card information. The card types can be Visa, Master, Discover, and America Express. Make sure you check the expiration date of this credit card. You can send the information through email to user but it is not required in this project. 
2.  You will ask the authors to upload their papers through a file upload page. Your system will assign a paper ID as confirmation number. When an author upload his/her paper, your system will ask  the author  to give  title of  the paper, choose area and subarea of his/her paper so that later you can assign appropriate reviewers to review his/her paper based on these information.
3.  Generate password file for reviewers so that they can login to see the paper assigned to them to review. You have freedom to assign papers for reviewers so come up with a logic for how to assign papers to reviewers. When a reviewer login, your page will  list  the paper(s)  which  is  assigned  to  him/her  and  link(s)  that  is  provided  so  that  he/she  can download the paper(s) for review. Make sure the login page is secured. (i.e., use https) 
4.  Add a new book store for this conference. Your book store is similar to Amazon.com book store. Make sure you use shopping cart so that user can view their cart to add quantity or delete items from shopping cart. 
5.  Create a web based content management system such as phpmyadmin. You shall be able to do insert, delete, update, and select to the database items. For example, you can add a book to your bookstore. Modify the price for a book, delete an existing book form your book store etc.   
# Requirement for the step2 of this project 
•	Use PHP as server side script language 
•	Use Mysql as backend database server 
•	When you finish your project and after testing, dump your database to a sql file and name it yourtemaname.sql. Where your team name is the name of your team. If I deploy your web site on XAMPP 1.8.3, then I shall be able to run without any modification of any of your scripts.  
