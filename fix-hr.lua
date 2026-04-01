-- Filtr Lua do zmiany domyślnej linii poziomej (---)
-- Pandoc domyślnie używa 0.5\linewidth, ten filtr zmienia to na pełną szerokość

function HorizontalRule()
    return pandoc.RawBlock('latex', '\\noindent\\rule{\\linewidth}{0.4pt}')
end
