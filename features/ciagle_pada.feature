Feature: Web pages

  Scenario: Ciagle pada
    Given I am on "ciagle_pada.html"
    Then the response status code should be 200
    Then I should see "Alejkami już strumienie wody płyną,"
