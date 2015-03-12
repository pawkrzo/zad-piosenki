Feature: Web pages

  Scenario: Piosenka Mury
     Given I am on homepage
      When I follow "Mury"
      Then I should see "Śpiewał że blisko już świt."
