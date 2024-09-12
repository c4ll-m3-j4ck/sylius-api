<?php
declare(strict_types=1);

namespace PunktDe\Sylius\Api\Dto;

class Channel implements ApiDtoInterface
{
    protected string $baseCurrency;
    protected string $defaultLocale;
    protected ?string $defaultTaxZone;
    protected string $taxCalculationStrategy;
    /** @var string[] */
    protected array $currencies;
    /** @var string[] */
    protected array $locales;
    /** @var string[] */
    protected array $countries;
    protected ?string $themeName;
    protected ?string $contactEmail;
    protected ?string $contactPhoneNumber;
    protected bool $skippingShippingStepAllowed;
    protected bool $skippingPaymentStepAllowed;
    protected bool $accountVerificationRequired;
    protected bool $shippingAddressInCheckoutRequired;
    protected ?string $shopBillingData;
    protected ?string $menuTaxon;
    protected ?string $channelPriceHistoryConfig;
    protected string $code;
    protected string $name;
    protected ?string $description;
    protected ?string $hostname;
    protected ?string $color;
    protected bool $enabled;
    protected string $identifier;

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getBaseCurrency(): string
    {
        return $this->baseCurrency;
    }

    public function setBaseCurrency(string $baseCurrency): Channel
    {
        $this->baseCurrency = $baseCurrency;
        return $this;
    }

    public function getDefaultLocale(): string
    {
        return $this->defaultLocale;
    }

    public function setDefaultLocale(string $defaultLocale): Channel
    {
        $this->defaultLocale = $defaultLocale;
        return $this;
    }

    public function getDefaultTaxZone(): ?string
    {
        return $this->defaultTaxZone;
    }

    public function setDefaultTaxZone(?string $defaultTaxZone): Channel
    {
        $this->defaultTaxZone = $defaultTaxZone;
        return $this;
    }

    public function getTaxCalculationStrategy(): string
    {
        return $this->taxCalculationStrategy;
    }

    public function setTaxCalculationStrategy(string $taxCalculationStrategy): Channel
    {
        $this->taxCalculationStrategy = $taxCalculationStrategy;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCurrencies(): array
    {
        return $this->currencies;
    }

    public function setCurrencies(array $currencies): Channel
    {
        $this->currencies = $currencies;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLocales(): array
    {
        return $this->locales;
    }

    public function setLocales(array $locales): Channel
    {
        $this->locales = $locales;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    public function setCountries(array $countries): Channel
    {
        $this->countries = $countries;
        return $this;
    }

    public function getThemeName(): ?string
    {
        return $this->themeName;
    }

    public function setThemeName(?string $themeName): Channel
    {
        $this->themeName = $themeName;
        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): Channel
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    public function getContactPhoneNumber(): ?string
    {
        return $this->contactPhoneNumber;
    }

    public function setContactPhoneNumber(?string $contactPhoneNumber): Channel
    {
        $this->contactPhoneNumber = $contactPhoneNumber;
        return $this;
    }

    public function getSkippingShippingStepAllowed(): bool
    {
        return $this->skippingShippingStepAllowed;
    }

    public function setSkippingShippingStepAllowed(bool $skippingShippingStepAllowed): Channel
    {
        $this->skippingShippingStepAllowed = $skippingShippingStepAllowed;
        return $this;
    }

    public function getSkippingPaymentStepAllowed(): bool
    {
        return $this->skippingPaymentStepAllowed;
    }

    public function setSkippingPaymentStepAllowed(bool $skippingPaymentStepAllowed): Channel
    {
        $this->skippingPaymentStepAllowed = $skippingPaymentStepAllowed;
        return $this;
    }

    public function getAccountVerificationRequired(): bool
    {
        return $this->accountVerificationRequired;
    }

    public function setAccountVerificationRequired(bool $accountVerificationRequired): Channel
    {
        $this->accountVerificationRequired = $accountVerificationRequired;
        return $this;
    }

    public function getShippingAddressInCheckoutRequired(): bool
    {
        return $this->shippingAddressInCheckoutRequired;
    }

    public function setShippingAddressInCheckoutRequired(bool $shippingAddressInCheckoutRequired): Channel
    {
        $this->shippingAddressInCheckoutRequired = $shippingAddressInCheckoutRequired;
        return $this;
    }

    public function getShopBillingData(): ?string
    {
        return $this->shopBillingData;
    }

    public function setShopBillingData(?string $shopBillingData): Channel
    {
        $this->shopBillingData = $shopBillingData;
        return $this;
    }

    public function getMenuTaxon(): ?string
    {
        return $this->menuTaxon;
    }

    public function setMenuTaxon(?string $menuTaxon): Channel
    {
        $this->menuTaxon = $menuTaxon;
        return $this;
    }

    public function getChannelPriceHistoryConfig(): ?string
    {
        return $this->channelPriceHistoryConfig;
    }

    public function setChannelPriceHistoryConfig(?string $channelPriceHistoryConfig): Channel
    {
        $this->channelPriceHistoryConfig = $channelPriceHistoryConfig;
        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): Channel
    {
        $this->code = $code;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Channel
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Channel
    {
        $this->description = $description;
        return $this;
    }

    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    public function setHostname(?string $hostname): Channel
    {
        $this->hostname = $hostname;
        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): Channel
    {
        $this->color = $color;
        return $this;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): Channel
    {
        $this->enabled = $enabled;
        return $this;
    }
}
