Feature: Web pages

  Scenario: Bystra Woda
     Given I am on "bystra-woda.html"
     When I follow "Bystra Woda"
     Then I should see "Hej bystra woda, bystra wodzicka"
