# Laravel package for Amplitude API.

## Installation

```bash
composer require viezel/laravel-amplitude
```

Do not forget to publish the config file:

```bash
artisan vendor:publish
```

To be up and running, just add the Amplitude API Key of your project in the `.env` file, using `AMPLITUDE_API_KEY` as key.

If you want to use the `Amplitude` facade, remember to add the following line to your `config/app.php`, in the `aliases` item.

```php
'aliases' => [
    ...

    'Amplitude' => LaravelAmplitude\Facades\Amplitude::class
]
```

## Usage

Laravel Amplitude uses a simple syntax to track your product events easily.

### Setting the User Id

First of all, before sending anything, you will need to set the User ID.

```php
Amplitude::setUserId('user_id');
```

Note: setting the user id is MANDATORY. Otherwise, you will get an error when trying to send data to Amplitude.

### Sending Events

Once the user id is set, you are ready to send events to your Amplitude project.

```php
// simple sending...
Amplitude::sendEvent('app_opened');

// sending with properties...
Amplitude::sendEvent('subscription_paid', ['was_trial' => true]);
```

Also, you can change the user properties with the dedicated method `setUserProperties`:

```php
// properties new values are set here
Amplitude::setUserProperties([
    'trial' => false,
    'plan' => 'professional'
]);

// data is sent to Amplitude here
Amplitude::sendEvent('subscription_paid', ['was_trial' => true]);
```

IMPORTANT: the properties will be sent to Amplitude at the next `sendEvent` call. Without any other call to `sendEvent`, the new user properties are not going to be saved.

### Queueing Events

If send a lot of events and you want to keep your performances good, you may choose events queueing instead of the simple sending you just saw.

With events queueing, **you will send all your events once the request is over**, instead of making different API calls during the request lifecycle.

To use it, just switch your `sendEvent` calls to `queueEvent` method.

```php
// simple sending...
Amplitude::queueEvent('app_opened');

// sending with properties...
Amplitude::queueEvent('subscription_paid', ['was_trial' => true]);
```

Nothing more to do! When the request will be finished, Laravel Amplitude will automatically trigger the send operation of your data.

However, if you want more control and you want to send your queued events in your code, you can do it manually with a call to the `sendQueuedEvents` method.

```php
// queueing an event...
Amplitude::queueEvent('app_opened');

// queueing another event...
Amplitude::queueEvent('subscription_paid', ['was_trial' => true]);

// send them!
Amplitude::sendQueuedEvents();
```

### Security

If you discover any security related issues, please email francesco@ahia.store instead of using the issue tracker.

## Credits

- [Francesco Malatesta](https://github.com/francescomalatesta)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
