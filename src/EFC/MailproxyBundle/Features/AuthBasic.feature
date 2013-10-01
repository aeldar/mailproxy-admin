Feature: basic authentification at site
  In order to use the site
  As user of this site
  I need to be able to login at homepage

Background:
  Given a clean browser session

  Scenario: I cannot authenticate myself by entering wrong password
    Given I am on the homepage
    When I go to "/account/Eldar" and enter "admin" and "123" to browser password box
    Then I should not see "logged in"

Scenario: I can authenticate myself by entering right password
  Given I am on the homepage
  When I go to "/account/Eldar" and enter "admin" and "adminpass" to browser password box
  Then I should see "logged in"
