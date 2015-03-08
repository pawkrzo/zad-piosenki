Feature: Web pages

  Scenario: piosenka-Stop
    Given I am on "Stop.html"
    Then the response status code should be 200
    Then I should see "All that I have is all that you've given me "
