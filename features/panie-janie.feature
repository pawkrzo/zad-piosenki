Feature: Web pages

  Scenario: Panie Janie
    Given I am on homepage
    When I follow "Panie Janie"    
    Then I should see "Rano Wstań"
