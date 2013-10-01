@auth @login
Feature: login form authentication
  In order to use this site securely
  As site user
  I need to be able to login

Background:
  Given I am on homepage

Scenario: Visit resources as anonimous
  When I go to "/efc/hello/eldar"
  Then I should see "logged in as Anonymous"
  And I should see "Hello eldar!"

Scenario: Redirect to login when try to visit admin page
  When I go to "/efc/hello/admin/eldar"
  Then I should be on "/efc/login"
  And I should see "Please log in"

Scenario: Access to admin page with admin credentials
  When I go to "/efc/hello/admin/eldar"
  And I fill in "username" with "admin"
  And I fill in "password" with "adminpass"
  And I press "submit"
  Then I should be on "/efc/hello/admin/eldar"
  And I should see "Hello eldar secured for Admins only"

Scenario: Deny access to admin page with user credentials
  When I go to "/efc/hello/admin/eldar"
  And I fill in "username" with "user"
  And I fill in "password" with "userpass"
  And I press "submit"
  Then the response status code should be 403
  And I should not see "Hello eldar secured for Admins only"

Scenario: Logout and become anonimous
  When I go to "/efc/hello/admin/eldar"
  And I fill in "username" with "admin"
  And I fill in "password" with "adminpass"
  And I press "submit"
  And I should see "logged in"
  And I go to "/efc/logout"
  Then I should see "Welcome to EFC"

