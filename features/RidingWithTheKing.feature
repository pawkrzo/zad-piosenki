Feature: Web pages

  Scenario: Riding with the king by Eric Clapton & BB King
    Given I am on "ridingWithTheKing.html"
    Then the response status code should be 200
    Then I should see "Riding with the king"