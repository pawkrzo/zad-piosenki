Feature: Web pages

  Scenario: Biber song
    Given I am on homepage
    When I follow "Biber song"
    Then I should see "Aye, aye, aye, aye, aye, aye, aye, aye"