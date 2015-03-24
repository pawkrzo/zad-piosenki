Feature: Web pages

  Scenario: Stay too long
    Given I am on homepage
     When I follow "Stay too long"
     Then I should see "I know what's to come"