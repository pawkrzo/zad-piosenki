Feature: Web pages

  Scenario: AllForLove...
    Given I am on "all_for_love.html"
    Then the response status code should be 200
    Then I should see "When it's love you give"