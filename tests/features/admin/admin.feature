@api

Feature: Test Admin Functionality

Given I am admin
I should be able to run admin task

Scenario: Run cron
  Given I am logged in as a user with the "administrator" role
  When I run cron
  And am on "admin/reports/dblog"
  Then I should see the link "Cron run completed"

Scenario: Clear cache
  Given I am logged in as a user with the "administrator" role
  When I visit "admin/config/development/performance"
    And I press "Clear all caches"
  Then I should see "Caches cleared."
