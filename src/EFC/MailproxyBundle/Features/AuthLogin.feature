@auth @login
Feature: login form authentication
  In order to use this site securely
  As site user
  I need to be able to login

Scenario: Redirect to login page
  Given I am on homepage
  When I go to "/account/eldar"
  Then I should be on "/login"
  And I should see "Please log in"