Feature: Statystyka powtórzeń wyrazów

  Scenario: Statystyka powtórzeń wyrazów
    Given I am on homepage
    When I follow "choopak - zadanie 1"
    And I fill in "Str" with "rafal rafal durzynski durzynski"
    And I press "Przetwórz"
    Then I should see "rafal - 2; durzynski - 2; "