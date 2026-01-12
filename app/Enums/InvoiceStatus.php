<?php

namespace App\Enums;

enum InvoiceStatus: string
{
  case DRAFT = 'draft';
  case PENDING = 'pending';
  case PAID = 'paid';


  public function label(): string
  {
    return match ($this) {
      self::DRAFT => 'Draft',
      self::PENDING => 'Pending',
      self::PAID => 'Paid'
    };
  }

  public function bg(): string
  {
    return match ($this) {
      self::DRAFT => 'bg-[#373B53]',
      self::PENDING => 'bg-[#FF8F00]',
      self::PAID => 'bg-[#33D69F]'
    };
  }

  public function text(): string
  {
    return match ($this) {
      self::DRAFT => 'text-[#373B53]',
      self::PENDING => 'text-[#FF8F00]',
      self::PAID => 'text-[#33D69F]'
    };
  }

  public function dot(): string
  {
    return match ($this) {
      self::DRAFT => 'bg-[#373B53]',
      self::PENDING => 'bg-[#FF8F00]',
      self::PAID => 'bg-[#33D69F]'
    };
  }
}
