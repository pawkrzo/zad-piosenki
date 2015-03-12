Feature: Web pages

  Scenario: Balkanica...
    Given I am on "balkanica.html"
    Then the response status code should be 200
    Then I should see "Orkiestra nie oszczędza sił"