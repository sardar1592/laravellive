1. `composer require nuwave/lighthouse`
2. `php artisan vendor:publish --tag=lighthouse-schema`
3. `php artisan lighthouse:ide-helper`
4. `composer require mll-lab/laravel-graphiql`
5. `composer require mll-lab/graphql-php-scalars`
6. Add Scalars

```
scalar Email @scalar(class: "MLL\\GraphQLScalars\\Email")
scalar JSON @scalar(class: "MLL\\GraphQLScalars\\JSON")
scalar Date @scalar(class: "MLL\\GraphQLScalars\\Date")
```

1. Change string to Email across schema
2. Add type schema for the event 
3. Add type schema for the speaker
4. Add event and speaker with user. 
5. Add mutation type. 
6. Add createEvent, UpdateEvent and deleteEvent mutations