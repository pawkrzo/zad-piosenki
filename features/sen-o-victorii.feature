Feature: Web pages

  Scenario: Sen o Victorii
    Given I am on homepage
    When I follow "Sen o Victorii..."
    Then I should see "Dzisiaj miałem piękny sen"
