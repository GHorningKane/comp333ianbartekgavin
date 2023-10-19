# comp333bartekgavin
Homework 1 repository :). effective-pancake

Teammates: Ian, Bartek, Gavin

Purpose of the code: Display a mock landing page for a music discussion site :). 

Repo contents: Some images (album covers), index.html (our website), style-sheet.css, sign-in.html, what da dog doing.gif which is an image for another site, dog-chilling.html, also in the repo, which we post in as an iframe, and a license file. And of course the readme, but you already know that :p.

How to run the file: 
https://ghorningkane.github.io/comp333ianbartekgavin/
is the link to our website from the repo, otherwise download the repo, and open index.html in a browser. 

Work split was even :). We did have a lot of issues with github version control though haha, we got it worked out in the end.

# HW2 Readme section

# Setting up Development Environment: 

# PHPMyAdmin Initial Image:
<img width="1440" alt="image" src="https://github.com/GHorningKane/comp333ianbartekgavin/assets/140963707/85b44fac-b479-4385-8077-45267ad70b3d">

# Table Structure: 'users' Table:
<img width="1436" alt="image" src="https://github.com/GHorningKane/comp333ianbartekgavin/assets/140963707/b7d40640-7b22-4f2e-93aa-f64c191aa41b">


# Table Structure: 'ratings' Table:
<img width="1439" alt="image" src="https://github.com/GHorningKane/comp333ianbartekgavin/assets/140963707/ba0f812b-084c-4804-ae65-73a1fd0ef2e1">

# User can only rate once:
The same user does not have the ability to enter the same entry twice without seeing this error:
![Alt text](image-7.png)


# Users must have a login, no duplicate users are allowed, and users stay logged in:
In the instance someone attempts to sign up with a duplicate user they are met with this error:
![Alt text](image-8.png)


# The registration asks for users to enter their passwords twice to ensure correctness:
<img width="374" alt="image" src="https://github.com/GHorningKane/comp333ianbartekgavin/assets/140963707/ff28296b-8631-45e6-bbc6-bfc047e3a3b2">

# If a user requests the registration page, they are redirected to the list of rated songs:

# At the top of each page the current user is displayed and concurrently, all ratings are visable for all, but only interractable for those who created the rating:
![Alt text](image-4.png)


# Updating/Deleting/Canceling brings one back to the list of ratings:
This is hard to prove with a simple screenshot, but this is most certainly implemented as shown through this code and its comments...
![Alt text](image.png)
![Alt text](image-1.png)
![Alt text](image-2.png)



# Via the frontend requisites are present:
Users cannot leave fields blank, and users cannot make a password smaller than 10 characters long:
![Alt text](image-3.png)

# Users cannot rate with more than one integer:
Attempt at breaking rule:
![Alt text](image-5.png)
Returned error:
![Alt text](image-6.png)

Alternative Attempt:
![Alt text](image-9.png)
Error:
![Alt text](image-10.png)

# SQL Querries are parameterized to avoid injections attacks:

# Passwords are hashed:

# Our Work was split evenly once again!



