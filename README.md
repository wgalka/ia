# Instrukcja generowania PDF (Pandoc)

Ten plik zawiera gotowe polecenia do konwersji plików Markdown na PDF przy użyciu narzędzia **Pandoc**, z zachowaniem profesjonalnego wyglądu, czcionki **Fira Sans** oraz poprawkami dla linii poziomych i ikon.

## 🛠️ Wymagania

Aby polecenia zadziałały poprawnie, Twój system musi posiadać:
1.  **Pandoc**: Konwerter (instalacja: `winget install pandoc` na Windows).
2.  **XeLaTeX**: Silnik LaTeX (część dystrybucji **MiKTeX** lub **TeX Live**), wymagany do obsługi czcionek systemowych.
3.  **Czcionka Fira Sans**: Musi być zainstalowana w systemie.
4.  **Czcionka Segoe UI Emoji** (lub inna wspierająca emoji): Domyślna na Windows dla ikon.

## 📄 Główne polecenie (Naprawione błędy ikon i linii)

Aby wygenerować plik z poprawką na linię pozioma (`---`) oraz brakujące ikony (🌐, 🏆 itp.), użyj:

```powershell
# Dla pliku project_requirements.md
pandoc project_requirements.md -o project_requirements.pdf `
    --pdf-engine=xelatex `
    -H header.tex `
    -L fix-hr.lua `
    -V lang=pl `
    --syntax-highlighting pygments
```

## 🚀 Szybka konwersja (Bez dodatkowych fixów)

Jeśli nie potrzebujesz poprawek ikon i wystarczą Ci proste linie:

```powershell
pandoc plik.md -o plik.pdf --pdf-engine=xelatex -V mainfont="Fira Sans" -V geometry:margin=2.5cm
```

## 💡 Opis plików pomocniczych

*   **`header.tex`**: Zawiera konfigurację czcionki głównej oraz "pożyczania" symboli (emoji) z innej czcionki systemowej, aby uniknąć błędów „Missing character”.
*   **`fix-hr.lua`**: Rozwiązuje problem krótkiej linii poziomej (Pandoc domyślnie robi ją na 50% strony, ten filtr wymusza 100%).

### Rozwiązywanie problemów
- **Błąd "Missing character"**: Jeśli nadal widzisz ten błąd, upewnij się, że w systemie masz czcionkę **Segoe UI Emoji** lub zmień nazwę czcionki w pliku `header.tex` w linii `\newfontfamily{\emojifont}{Segoe UI Emoji}` na inną (np. `DejaVu Sans`).
- **Marginesy**: Możesz je zmienić edytując linię `\usepackage[margin=2.5cm]{geometry}` w pliku `header.tex`.
