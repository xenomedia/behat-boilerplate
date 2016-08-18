@api
Feature: Test User Functionality

Given I am admin
I should be able to create users, view users, etc..

 Scenario: Create users
  Given users:
  | name     | mail            | status |
  | Joe User | joe@example.com | 1      |
  And I am logged in as a user with the "administrator" role
  When I visit "admin/people"
  Then I should see the link "Joe User"

Scenario: Logs in to the site
  Given users:
  | name     | pass        | mail                  | status | field_fir | field_la |
  | someuser | sompassword | someone@xenomedia.com | 1      | Some      | User   |
  Given I am on "/user"
  When I fill in "Username" with "someuser"
    And I fill in "Password" with "sompassword"
    And I press "Log in"
  Then I should see "Some User"
  Then I visit "user/logout"
  Then I should be on the homepage
