Feature: Web pages

  Scenario: Sen o Warszawie
    Given I am on homepage
    When I follow "Sen o Warszawie"
    Then I should see "Mam, tak samo jak ty,"
    
