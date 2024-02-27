1. `composer require nuwave/lighthouse`
2. `php artisan vendor:publish --tag=lighthouse-schema`
3. `php artisan lighthouse:ide-helper`
4. `composer require mll-lab/laravel-graphiql`
5. `composer require mll-lab/graphql-php-scalars`
6. `composer require mll-lab/graphql-php-scalars`
7. Go to [https://github.com/mll-lab/graphql-php-scalars](https://github.com/mll-lab/graphql-php-scalars?tab=readme-ov-file)

```
scalar Email @scalar(class: "MLL\\GraphQLScalars\\Email")
scalar JSON @scalar(class: "MLL\\GraphQLScalars\\JSON")
scalar Date @scalar(class: "MLL\\GraphQLScalars\\Date")
```

1. Add schema for the event 
2. Add schema for the speaker
3. Change string to Email across schema
4. Write Event type schema, ad them with user
5. Write speaker type schema, add them with user
6. Add mutation type. 
7. Add createEvent, UpdateEvent and deleteEvent mutations