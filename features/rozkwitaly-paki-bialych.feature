Feature: Web pages

  Scenario: Rozkwitaly paki bialych
    Given I am on "rozkwitaly-paki-bialych.html"
    Then the response status code should be 200
    Then I should see "Rozkwitały pąki białych róż,"
