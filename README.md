# FinversePhp

Documentation of the early finverse services


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/FinversePhp/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: Oauth2
$config = FinversePhp\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new FinversePhp\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mandate_id = 'mandate_id_example'; // string | The mandate_id that is being authorized
$authorize_mandate_request = new \FinversePhp\Model\AuthorizeMandateRequest(); // \FinversePhp\Model\AuthorizeMandateRequest | request body for authorizing a mandate

try {
    $result = $apiInstance->authorizeMandate($mandate_id, $authorize_mandate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->authorizeMandate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sandbox.finverse.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomerApi* | [**authorizeMandate**](docs/Api/CustomerApi.md#authorizemandate) | **POST** /mandates/{mandateId}/authorize | 
*CustomerApi* | [**createMandate**](docs/Api/CustomerApi.md#createmandate) | **POST** /mandates | 
*CustomerApi* | [**createPayment**](docs/Api/CustomerApi.md#createpayment) | **POST** /payments | 
*CustomerApi* | [**createPaymentAccount**](docs/Api/CustomerApi.md#createpaymentaccount) | **POST** /payment_accounts | 
*CustomerApi* | [**createPaymentInstruction**](docs/Api/CustomerApi.md#createpaymentinstruction) | **POST** /payments/instruction | 
*CustomerApi* | [**createPaymentUser**](docs/Api/CustomerApi.md#createpaymentuser) | **POST** /payment_users | 
*CustomerApi* | [**deletePaymentAccount**](docs/Api/CustomerApi.md#deletepaymentaccount) | **DELETE** /payment_accounts/{paymentAccountId} | 
*CustomerApi* | [**generateLinkToken**](docs/Api/CustomerApi.md#generatelinktoken) | **POST** /link/token | 
*CustomerApi* | [**getInstitution**](docs/Api/CustomerApi.md#getinstitution) | **GET** /institutions/{institutionId} | 
*CustomerApi* | [**getLineItemsForDisplay**](docs/Api/CustomerApi.md#getlineitemsfordisplay) | **GET** /calculate/line_items/{paymentType} | 
*CustomerApi* | [**getLoginIdentityById**](docs/Api/CustomerApi.md#getloginidentitybyid) | **GET** /login_identity/{loginIdentityId} | 
*CustomerApi* | [**getLoginIdentityHistory**](docs/Api/CustomerApi.md#getloginidentityhistory) | **GET** /login_identity/{loginIdentityId}/history | 
*CustomerApi* | [**getMandate**](docs/Api/CustomerApi.md#getmandate) | **GET** /mandates/{mandateId} | 
*CustomerApi* | [**getMandateAuth**](docs/Api/CustomerApi.md#getmandateauth) | **GET** /mandates/auth | 
*CustomerApi* | [**getMandateAuthLink**](docs/Api/CustomerApi.md#getmandateauthlink) | **POST** /mandates/link | 
*CustomerApi* | [**getPayment**](docs/Api/CustomerApi.md#getpayment) | **GET** /payments/{paymentId} | 
*CustomerApi* | [**getPaymentInstruction**](docs/Api/CustomerApi.md#getpaymentinstruction) | **GET** /payments/instruction/{paymentInstructionId} | 
*CustomerApi* | [**getPaymentUser**](docs/Api/CustomerApi.md#getpaymentuser) | **GET** /payment_users/{paymentUserId} | 
*CustomerApi* | [**listInstitutions**](docs/Api/CustomerApi.md#listinstitutions) | **GET** /institutions | 
*CustomerApi* | [**listPaymentAccounts**](docs/Api/CustomerApi.md#listpaymentaccounts) | **GET** /payment_users/{paymentUserId}/payment_accounts | 
*CustomerApi* | [**listPaymentAccountsWithEnrichedData**](docs/Api/CustomerApi.md#listpaymentaccountswithenricheddata) | **GET** /payment_accounts | 
*CustomerApi* | [**refreshToken**](docs/Api/CustomerApi.md#refreshtoken) | **POST** /auth/token/refresh | 
*CustomerApi* | [**setMandateInstitution**](docs/Api/CustomerApi.md#setmandateinstitution) | **POST** /mandates/institution_selection | 
*CustomerApi* | [**submitAuthChecklist**](docs/Api/CustomerApi.md#submitauthchecklist) | **POST** /mandates/auth | 
*CustomerApi* | [**updatePayment**](docs/Api/CustomerApi.md#updatepayment) | **POST** /payments/{paymentId} | 
*CustomerApi* | [**updateTestPaymentStatus**](docs/Api/CustomerApi.md#updatetestpaymentstatus) | **POST** /testing/payments/{paymentId}/status | 
*DefaultApi* | [**cancelPaymentLink**](docs/Api/DefaultApi.md#cancelpaymentlink) | **POST** /payment_links/{paymentLinkId}/cancel | 
*DefaultApi* | [**cancelPayout**](docs/Api/DefaultApi.md#cancelpayout) | **POST** /payouts/{payoutId}/cancel | 
*DefaultApi* | [**changePaymentMethodPaymentLink**](docs/Api/DefaultApi.md#changepaymentmethodpaymentlink) | **POST** /payment_link/fvlink/payment_method/change | 
*DefaultApi* | [**confirmManualPayment**](docs/Api/DefaultApi.md#confirmmanualpayment) | **POST** /payments/manual_payment | 
*DefaultApi* | [**confirmPayment**](docs/Api/DefaultApi.md#confirmpayment) | **POST** /payment_links/confirm | 
*DefaultApi* | [**createFpsToken**](docs/Api/DefaultApi.md#createfpstoken) | **POST** /payment_links/fps/token | 
*DefaultApi* | [**createMandateForExistingSender**](docs/Api/DefaultApi.md#createmandateforexistingsender) | **POST** /mandates/sender_account | 
*DefaultApi* | [**createPaymentLink**](docs/Api/DefaultApi.md#createpaymentlink) | **POST** /payment_links | 
*DefaultApi* | [**createPaymentLinkCardPayment**](docs/Api/DefaultApi.md#createpaymentlinkcardpayment) | **POST** /payment_links/card | 
*DefaultApi* | [**createPaymentLinkMandate**](docs/Api/DefaultApi.md#createpaymentlinkmandate) | **POST** /payment_links/mandates | 
*DefaultApi* | [**createPaymentMethod**](docs/Api/DefaultApi.md#createpaymentmethod) | **POST** /payment_users/{paymentUserId}/payment_methods | 
*DefaultApi* | [**createScheduledPayout**](docs/Api/DefaultApi.md#createscheduledpayout) | **POST** /payouts/scheduled | 
*DefaultApi* | [**demotePaymentAttempt**](docs/Api/DefaultApi.md#demotepaymentattempt) | **POST** /payment_link/fvlink/payment_attempt/demote | 
*DefaultApi* | [**downloadBalanceStatement**](docs/Api/DefaultApi.md#downloadbalancestatement) | **GET** /ledger/statement | 
*DefaultApi* | [**getFpsQrCode**](docs/Api/DefaultApi.md#getfpsqrcode) | **GET** /payment_links/fps/qr_code | 
*DefaultApi* | [**getInstitutionsForCustomer**](docs/Api/DefaultApi.md#getinstitutionsforcustomer) | **GET** /institutions/customer | 
*DefaultApi* | [**getPaymentLink**](docs/Api/DefaultApi.md#getpaymentlink) | **GET** /payment_links/{paymentLinkId} | 
*DefaultApi* | [**getPaymentMethod**](docs/Api/DefaultApi.md#getpaymentmethod) | **GET** /payment_methods/{paymentMethodId} | 
*DefaultApi* | [**getPaymentMethodPaymentLink**](docs/Api/DefaultApi.md#getpaymentmethodpaymentlink) | **GET** /payment_link/fvlink/payment_method | 
*DefaultApi* | [**getPaymentPaymentLink**](docs/Api/DefaultApi.md#getpaymentpaymentlink) | **GET** /payment_link/fvlink/payment | 
*DefaultApi* | [**getPayoutById**](docs/Api/DefaultApi.md#getpayoutbyid) | **GET** /payouts/{payoutId} | 
*DefaultApi* | [**getSenderPaymentUser**](docs/Api/DefaultApi.md#getsenderpaymentuser) | **GET** /payment_link/fvlink/payment_user/sender | 
*DefaultApi* | [**listDetokenizedMandates**](docs/Api/DefaultApi.md#listdetokenizedmandates) | **GET** /mandates/details | 
*DefaultApi* | [**listMandates**](docs/Api/DefaultApi.md#listmandates) | **GET** /mandates | 
*DefaultApi* | [**listPaymentMethods**](docs/Api/DefaultApi.md#listpaymentmethods) | **GET** /payment_users/{paymentUserId}/payment_methods | 
*DefaultApi* | [**listPayments**](docs/Api/DefaultApi.md#listpayments) | **GET** /payments | 
*DefaultApi* | [**listPayouts**](docs/Api/DefaultApi.md#listpayouts) | **GET** /payouts | 
*DefaultApi* | [**refreshPaymentAttempt**](docs/Api/DefaultApi.md#refreshpaymentattempt) | **POST** /payment_link/fvlink/payment_attempt/refresh | 
*DefaultApi* | [**setAutopayConsent**](docs/Api/DefaultApi.md#setautopayconsent) | **POST** /payment_link/fvlink/payment_user/autopay | 
*DefaultApi* | [**updatePaymentUser**](docs/Api/DefaultApi.md#updatepaymentuser) | **POST** /payment_users/{paymentUserId} | 
*LinkApi* | [**createLink**](docs/Api/LinkApi.md#createlink) | **POST** /link | 
*LinkApi* | [**createLinkWoauth**](docs/Api/LinkApi.md#createlinkwoauth) | **POST** /link/woauth | 
*LinkApi* | [**linkAction**](docs/Api/LinkApi.md#linkaction) | **POST** /link/action/{loginIdentityId} | 
*LinkApi* | [**linkStatus**](docs/Api/LinkApi.md#linkstatus) | **GET** /link/status/{loginIdentityId} | 
*LinkApi* | [**linkStatusNonSensitive**](docs/Api/LinkApi.md#linkstatusnonsensitive) | **GET** /link/fvlink/status/{loginIdentityId} | 
*LinkApi* | [**relink**](docs/Api/LinkApi.md#relink) | **POST** /link/relink | 
*LinkApi* | [**relinkV2**](docs/Api/LinkApi.md#relinkv2) | **POST** /link/relink/{loginIdentityId} | 
*LinkApi* | [**token**](docs/Api/LinkApi.md#token) | **POST** /auth/token | 
*LoginIdentityApi* | [**deleteLoginIdentity**](docs/Api/LoginIdentityApi.md#deleteloginidentity) | **DELETE** /login_identity | 
*LoginIdentityApi* | [**generateLinkToken**](docs/Api/LoginIdentityApi.md#generatelinktoken) | **POST** /link/token | 
*LoginIdentityApi* | [**getAccount**](docs/Api/LoginIdentityApi.md#getaccount) | **GET** /accounts/{accountId} | 
*LoginIdentityApi* | [**getAccountNumber**](docs/Api/LoginIdentityApi.md#getaccountnumber) | **GET** /account_numbers/{accountId} | 
*LoginIdentityApi* | [**getBalanceHistory**](docs/Api/LoginIdentityApi.md#getbalancehistory) | **GET** /balance_history/{accountId} | 
*LoginIdentityApi* | [**getCompositeStatement**](docs/Api/LoginIdentityApi.md#getcompositestatement) | **GET** /composite_statement | 
*LoginIdentityApi* | [**getIdentity**](docs/Api/LoginIdentityApi.md#getidentity) | **GET** /identity | 
*LoginIdentityApi* | [**getIncomeEstimateByLoginIdentityId**](docs/Api/LoginIdentityApi.md#getincomeestimatebyloginidentityid) | **GET** /income | 
*LoginIdentityApi* | [**getLoginIdentity**](docs/Api/LoginIdentityApi.md#getloginidentity) | **GET** /login_identity | 
*LoginIdentityApi* | [**getStatement**](docs/Api/LoginIdentityApi.md#getstatement) | **GET** /statements/{statementId} | 
*LoginIdentityApi* | [**getStatements**](docs/Api/LoginIdentityApi.md#getstatements) | **GET** /statements | 
*LoginIdentityApi* | [**listAccounts**](docs/Api/LoginIdentityApi.md#listaccounts) | **GET** /accounts | 
*LoginIdentityApi* | [**listCardDetails**](docs/Api/LoginIdentityApi.md#listcarddetails) | **GET** /card_details | 
*LoginIdentityApi* | [**listTransactionsByAccountId**](docs/Api/LoginIdentityApi.md#listtransactionsbyaccountid) | **GET** /transactions/{accountId} | 
*LoginIdentityApi* | [**listTransactionsByLoginIdentityId**](docs/Api/LoginIdentityApi.md#listtransactionsbyloginidentityid) | **GET** /transactions | 
*LoginIdentityApi* | [**refreshLoginIdentity**](docs/Api/LoginIdentityApi.md#refreshloginidentity) | **POST** /login_identity/refresh | 
*PublicApi* | [**authCallback**](docs/Api/PublicApi.md#authcallback) | **GET** /auth/callback | 
*PublicApi* | [**generateCustomerAccessToken**](docs/Api/PublicApi.md#generatecustomeraccesstoken) | **POST** /auth/customer/token | 
*PublicApi* | [**getCredSubmitJwks**](docs/Api/PublicApi.md#getcredsubmitjwks) | **GET** /jwks | 
*PublicApi* | [**getPaymentsJwks**](docs/Api/PublicApi.md#getpaymentsjwks) | **GET** /payments/jwks | 

## Models

- [AccessTokenResponse](docs/Model/AccessTokenResponse.md)
- [Account](docs/Model/Account.md)
- [AccountNumber](docs/Model/AccountNumber.md)
- [AccountType](docs/Model/AccountType.md)
- [ActionRequest](docs/Model/ActionRequest.md)
- [AllProductStatus](docs/Model/AllProductStatus.md)
- [ApiLinkRequest](docs/Model/ApiLinkRequest.md)
- [ApiRelinkRequest](docs/Model/ApiRelinkRequest.md)
- [AuthChecklistFactor](docs/Model/AuthChecklistFactor.md)
- [AuthChecklistOptions](docs/Model/AuthChecklistOptions.md)
- [AuthorizeMandateRequest](docs/Model/AuthorizeMandateRequest.md)
- [AutopayEnrollmentConfiguration](docs/Model/AutopayEnrollmentConfiguration.md)
- [BadRequestModel](docs/Model/BadRequestModel.md)
- [BadRequestModelError](docs/Model/BadRequestModelError.md)
- [BadRequestModelV2](docs/Model/BadRequestModelV2.md)
- [BadRequestModelV2Error](docs/Model/BadRequestModelV2Error.md)
- [BalanceHistory](docs/Model/BalanceHistory.md)
- [CardAccount](docs/Model/CardAccount.md)
- [CardDetails](docs/Model/CardDetails.md)
- [CardFvLinkDetails](docs/Model/CardFvLinkDetails.md)
- [CardFvLinkResponse](docs/Model/CardFvLinkResponse.md)
- [CardRecipient](docs/Model/CardRecipient.md)
- [CardTotal](docs/Model/CardTotal.md)
- [CategoryPredictions](docs/Model/CategoryPredictions.md)
- [ChangePaymentMethodFvLinkResponse](docs/Model/ChangePaymentMethodFvLinkResponse.md)
- [CompositeStatementLink](docs/Model/CompositeStatementLink.md)
- [ConfirmPaymentResponse](docs/Model/ConfirmPaymentResponse.md)
- [CreateCardRequest](docs/Model/CreateCardRequest.md)
- [CreateCardRequestCardDetails](docs/Model/CreateCardRequestCardDetails.md)
- [CreateFpsTokenResponse](docs/Model/CreateFpsTokenResponse.md)
- [CreateMandateRequest](docs/Model/CreateMandateRequest.md)
- [CreateMandateRequestWithDdaReference](docs/Model/CreateMandateRequestWithDdaReference.md)
- [CreateMandateResponse](docs/Model/CreateMandateResponse.md)
- [CreateMandateSender](docs/Model/CreateMandateSender.md)
- [CreateMandateWithSenderAccountRequest](docs/Model/CreateMandateWithSenderAccountRequest.md)
- [CreatePaymentAccountRequest](docs/Model/CreatePaymentAccountRequest.md)
- [CreatePaymentInstructionResponse](docs/Model/CreatePaymentInstructionResponse.md)
- [CreatePaymentLinkCardPaymentResponse](docs/Model/CreatePaymentLinkCardPaymentResponse.md)
- [CreatePaymentLinkMandateRequest](docs/Model/CreatePaymentLinkMandateRequest.md)
- [CreatePaymentLinkMandateResponse](docs/Model/CreatePaymentLinkMandateResponse.md)
- [CreatePaymentLinkRequest](docs/Model/CreatePaymentLinkRequest.md)
- [CreatePaymentMethodRequest](docs/Model/CreatePaymentMethodRequest.md)
- [CreatePaymentRequest](docs/Model/CreatePaymentRequest.md)
- [CreatePaymentUserRequest](docs/Model/CreatePaymentUserRequest.md)
- [CreateRecipientAccount](docs/Model/CreateRecipientAccount.md)
- [CreateScheduledPayoutRequest](docs/Model/CreateScheduledPayoutRequest.md)
- [CurrencyAmount](docs/Model/CurrencyAmount.md)
- [CustomerPaymentInstruction](docs/Model/CustomerPaymentInstruction.md)
- [DeleteLoginIdentityResponse](docs/Model/DeleteLoginIdentityResponse.md)
- [DownloadBalanceStatementResponse](docs/Model/DownloadBalanceStatementResponse.md)
- [EncryptedPayload](docs/Model/EncryptedPayload.md)
- [ErrBodyModel](docs/Model/ErrBodyModel.md)
- [ErrBodyModelV2](docs/Model/ErrBodyModelV2.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [FVCard](docs/Model/FVCard.md)
- [FVCardDetails](docs/Model/FVCardDetails.md)
- [Fee](docs/Model/Fee.md)
- [FpsQrCodeResponse](docs/Model/FpsQrCodeResponse.md)
- [FvEmbeddedErrorModel](docs/Model/FvEmbeddedErrorModel.md)
- [FvErrorModel](docs/Model/FvErrorModel.md)
- [FvErrorModelV2](docs/Model/FvErrorModelV2.md)
- [GenericAmount](docs/Model/GenericAmount.md)
- [GetAccountNumberResponse](docs/Model/GetAccountNumberResponse.md)
- [GetAccountResponse](docs/Model/GetAccountResponse.md)
- [GetBalanceHistoryResponse](docs/Model/GetBalanceHistoryResponse.md)
- [GetIdentityResponse](docs/Model/GetIdentityResponse.md)
- [GetJWKSResponse](docs/Model/GetJWKSResponse.md)
- [GetLineItemsForDisplayResponse](docs/Model/GetLineItemsForDisplayResponse.md)
- [GetLoginIdentityByIdResponse](docs/Model/GetLoginIdentityByIdResponse.md)
- [GetLoginIdentityHistoryResponse](docs/Model/GetLoginIdentityHistoryResponse.md)
- [GetMandateAuthLinkRequest](docs/Model/GetMandateAuthLinkRequest.md)
- [GetMandateAuthLinkResponse](docs/Model/GetMandateAuthLinkResponse.md)
- [GetMandateAuthResponse](docs/Model/GetMandateAuthResponse.md)
- [GetMandateResponse](docs/Model/GetMandateResponse.md)
- [GetMandateSender](docs/Model/GetMandateSender.md)
- [GetPaymentInstructionsResponse](docs/Model/GetPaymentInstructionsResponse.md)
- [GetPaymentUserResponse](docs/Model/GetPaymentUserResponse.md)
- [GetStatementLinkResponse](docs/Model/GetStatementLinkResponse.md)
- [GetStatementsResponse](docs/Model/GetStatementsResponse.md)
- [Identity](docs/Model/Identity.md)
- [IdentityAddress](docs/Model/IdentityAddress.md)
- [IdentityDateOfBirth](docs/Model/IdentityDateOfBirth.md)
- [IdentityEmail](docs/Model/IdentityEmail.md)
- [IdentityName](docs/Model/IdentityName.md)
- [IdentityPhoneNumber](docs/Model/IdentityPhoneNumber.md)
- [IncomeEstimate](docs/Model/IncomeEstimate.md)
- [IncomeResponse](docs/Model/IncomeResponse.md)
- [IncomeStream](docs/Model/IncomeStream.md)
- [IncomeTotal](docs/Model/IncomeTotal.md)
- [Institution](docs/Model/Institution.md)
- [InstitutionShort](docs/Model/InstitutionShort.md)
- [IntegrationMetadataRequest](docs/Model/IntegrationMetadataRequest.md)
- [IntegrationMetadataResponse](docs/Model/IntegrationMetadataResponse.md)
- [JWKSKey](docs/Model/JWKSKey.md)
- [LineItem](docs/Model/LineItem.md)
- [LinkRequest](docs/Model/LinkRequest.md)
- [LinkResponse](docs/Model/LinkResponse.md)
- [LinkStatusActionModel](docs/Model/LinkStatusActionModel.md)
- [LinkStatusPendingModel](docs/Model/LinkStatusPendingModel.md)
- [LinkStatusResponse](docs/Model/LinkStatusResponse.md)
- [LinkTokenRequest](docs/Model/LinkTokenRequest.md)
- [LinkTokenResponse](docs/Model/LinkTokenResponse.md)
- [LinkTokenUserConfigs](docs/Model/LinkTokenUserConfigs.md)
- [ListAccountsResponse](docs/Model/ListAccountsResponse.md)
- [ListCardsDetailsResponse](docs/Model/ListCardsDetailsResponse.md)
- [ListMandatesResponse](docs/Model/ListMandatesResponse.md)
- [ListPaymentAccountsResponse](docs/Model/ListPaymentAccountsResponse.md)
- [ListPaymentAccountsWithEnrichedDataResponse](docs/Model/ListPaymentAccountsWithEnrichedDataResponse.md)
- [ListPaymentMethodsResponse](docs/Model/ListPaymentMethodsResponse.md)
- [ListPaymentsResponse](docs/Model/ListPaymentsResponse.md)
- [ListPayoutsResponse](docs/Model/ListPayoutsResponse.md)
- [ListTransactionsResponse](docs/Model/ListTransactionsResponse.md)
- [LoginAction](docs/Model/LoginAction.md)
- [LoginField](docs/Model/LoginField.md)
- [LoginIdentity](docs/Model/LoginIdentity.md)
- [LoginIdentityBillingDetails](docs/Model/LoginIdentityBillingDetails.md)
- [LoginIdentityError](docs/Model/LoginIdentityError.md)
- [LoginIdentityLoginMethodsAvailable](docs/Model/LoginIdentityLoginMethodsAvailable.md)
- [LoginIdentityShort](docs/Model/LoginIdentityShort.md)
- [LoginIdentityStatusDetails](docs/Model/LoginIdentityStatusDetails.md)
- [LoginMethod](docs/Model/LoginMethod.md)
- [MandateAuthEncryptionInfo](docs/Model/MandateAuthEncryptionInfo.md)
- [MandateAuthLinkCustomizations](docs/Model/MandateAuthLinkCustomizations.md)
- [MandateDetailsForPaymentLink](docs/Model/MandateDetailsForPaymentLink.md)
- [MandateDetailsRequest](docs/Model/MandateDetailsRequest.md)
- [MandateDetailsRequestWithDdaReference](docs/Model/MandateDetailsRequestWithDdaReference.md)
- [MandateDetailsResponse](docs/Model/MandateDetailsResponse.md)
- [MandateFvLinkDetails](docs/Model/MandateFvLinkDetails.md)
- [MandateFvLinkResponse](docs/Model/MandateFvLinkResponse.md)
- [MandateRecipient](docs/Model/MandateRecipient.md)
- [MandateRecipientAccount](docs/Model/MandateRecipientAccount.md)
- [MandateRecipientRequest](docs/Model/MandateRecipientRequest.md)
- [MandateSenderAccount](docs/Model/MandateSenderAccount.md)
- [MandateSenderAccountRequest](docs/Model/MandateSenderAccountRequest.md)
- [ManualPaymentConfirmationRequest](docs/Model/ManualPaymentConfirmationRequest.md)
- [ManualPaymentConfirmationResponse](docs/Model/ManualPaymentConfirmationResponse.md)
- [MonthlyIncomeEstimate](docs/Model/MonthlyIncomeEstimate.md)
- [NonSensitiveLinkStatusResponse](docs/Model/NonSensitiveLinkStatusResponse.md)
- [NonSensitiveLinkStatusSuccessModel](docs/Model/NonSensitiveLinkStatusSuccessModel.md)
- [OtherInfo](docs/Model/OtherInfo.md)
- [PaymentAccount](docs/Model/PaymentAccount.md)
- [PaymentAccountDetails](docs/Model/PaymentAccountDetails.md)
- [PaymentAccountDetailsWithEnrichedData](docs/Model/PaymentAccountDetailsWithEnrichedData.md)
- [PaymentDetails](docs/Model/PaymentDetails.md)
- [PaymentDetails2](docs/Model/PaymentDetails2.md)
- [PaymentDetailsReferences](docs/Model/PaymentDetailsReferences.md)
- [PaymentFvLinkDetails](docs/Model/PaymentFvLinkDetails.md)
- [PaymentFvLinkResponse](docs/Model/PaymentFvLinkResponse.md)
- [PaymentInfo](docs/Model/PaymentInfo.md)
- [PaymentInstruction](docs/Model/PaymentInstruction.md)
- [PaymentLinkCustomizations](docs/Model/PaymentLinkCustomizations.md)
- [PaymentLinkDetails](docs/Model/PaymentLinkDetails.md)
- [PaymentLinkResponse](docs/Model/PaymentLinkResponse.md)
- [PaymentLinkSender](docs/Model/PaymentLinkSender.md)
- [PaymentLinkSenderResponse](docs/Model/PaymentLinkSenderResponse.md)
- [PaymentLinkTokenResponse](docs/Model/PaymentLinkTokenResponse.md)
- [PaymentMethodFvLinkResponse](docs/Model/PaymentMethodFvLinkResponse.md)
- [PaymentMethodIntegrationMetadata](docs/Model/PaymentMethodIntegrationMetadata.md)
- [PaymentMethodIntegrationMetadataCybersourceMetadata](docs/Model/PaymentMethodIntegrationMetadataCybersourceMetadata.md)
- [PaymentMethodIntegrationMetadataStripeMetadata](docs/Model/PaymentMethodIntegrationMetadataStripeMetadata.md)
- [PaymentMethodIntegrationMetadataStripeMetadataCustomer](docs/Model/PaymentMethodIntegrationMetadataStripeMetadataCustomer.md)
- [PaymentMethodOverview](docs/Model/PaymentMethodOverview.md)
- [PaymentMethodResponse](docs/Model/PaymentMethodResponse.md)
- [PaymentResponse](docs/Model/PaymentResponse.md)
- [PaymentSchedule](docs/Model/PaymentSchedule.md)
- [PaymentSetupOptions](docs/Model/PaymentSetupOptions.md)
- [PaymentSnapshotPaymentMethod](docs/Model/PaymentSnapshotPaymentMethod.md)
- [PaymentSnapshotPaymentMethodCard](docs/Model/PaymentSnapshotPaymentMethodCard.md)
- [PaymentUser](docs/Model/PaymentUser.md)
- [PaymentUserWithoutEmail](docs/Model/PaymentUserWithoutEmail.md)
- [PayoutDetails](docs/Model/PayoutDetails.md)
- [PayoutSnapshotDetails](docs/Model/PayoutSnapshotDetails.md)
- [PayoutSnapshotResponse](docs/Model/PayoutSnapshotResponse.md)
- [Principal](docs/Model/Principal.md)
- [ProductStatus](docs/Model/ProductStatus.md)
- [RapidstorMetadataRequest](docs/Model/RapidstorMetadataRequest.md)
- [RapidstorMetadataResponse](docs/Model/RapidstorMetadataResponse.md)
- [RecipientAccountFilters](docs/Model/RecipientAccountFilters.md)
- [RecipientAccountNumber](docs/Model/RecipientAccountNumber.md)
- [RecipientAccountResponse](docs/Model/RecipientAccountResponse.md)
- [RedirectUriResponse](docs/Model/RedirectUriResponse.md)
- [RefreshData](docs/Model/RefreshData.md)
- [RefreshLoginIdentityLinkCustomizations](docs/Model/RefreshLoginIdentityLinkCustomizations.md)
- [RefreshLoginIdentityRequest](docs/Model/RefreshLoginIdentityRequest.md)
- [RefreshPaymentAttemptResponse](docs/Model/RefreshPaymentAttemptResponse.md)
- [RefreshRequest](docs/Model/RefreshRequest.md)
- [RefreshTokenResponse](docs/Model/RefreshTokenResponse.md)
- [RelinkRequest](docs/Model/RelinkRequest.md)
- [SenderAccountFvLinkResponse](docs/Model/SenderAccountFvLinkResponse.md)
- [SenderDetail](docs/Model/SenderDetail.md)
- [SetAutopayConsentRequest](docs/Model/SetAutopayConsentRequest.md)
- [SetMandateInstitutionRequest](docs/Model/SetMandateInstitutionRequest.md)
- [SetMandateInstitutionResponse](docs/Model/SetMandateInstitutionResponse.md)
- [SingleSourceIncome](docs/Model/SingleSourceIncome.md)
- [Statement](docs/Model/Statement.md)
- [StatementLink](docs/Model/StatementLink.md)
- [SubmitAuthChecklistRequest](docs/Model/SubmitAuthChecklistRequest.md)
- [SubmitAuthChecklistResponse](docs/Model/SubmitAuthChecklistResponse.md)
- [SwaggerErrBodyModel](docs/Model/SwaggerErrBodyModel.md)
- [TokenRequest](docs/Model/TokenRequest.md)
- [TokenResponse](docs/Model/TokenResponse.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionLimits](docs/Model/TransactionLimits.md)
- [UpdatePaymentRequest](docs/Model/UpdatePaymentRequest.md)
- [UpdatePaymentUserRequest](docs/Model/UpdatePaymentUserRequest.md)
- [UpdateTestPaymentStatusRequest](docs/Model/UpdateTestPaymentStatusRequest.md)
- [UserButton](docs/Model/UserButton.md)
- [UserField](docs/Model/UserField.md)
- [UserFieldOption](docs/Model/UserFieldOption.md)
- [UserMessage](docs/Model/UserMessage.md)

## Authorization

Authentication schemes defined for the API:
### Oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **test**: Test
    - **account**: Account
    - **balance**: Balance
    - **transaction**: Transaction
    - **credit**: Credit
    - **investment**: Investment
    - **institution**: Institution
    - **link**: Link

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@finverse.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.1`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
