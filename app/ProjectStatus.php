<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';
    case Closed = 'closed';

    public function label(): string
    {
        // Opção 1
        if ($this == self::Open) {
            return 'Aceitando propostas';
        }

        if ($this == self::Closed) {
            return 'Encerrado';
        }

        // Opção 2
        return match ($this) {
            self::Open => 'Aceitando propostas',
            self::Closed => 'Encerrando',
        };
    }
}
