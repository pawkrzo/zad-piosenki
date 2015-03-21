Feature: Web pages

  Scenario: Dont stop believin...
    Given I am on homepage
    When I follow "Don't stop believin'..."
    Then I should see "Just a small town girl"
