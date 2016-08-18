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
