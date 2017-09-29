<?php

namespace Laravel\Horizon;

use Closure;

/**
 * Class Horizon
 * @package Laravel\Horizon
 *
 * @method static \Illuminate\Database\Eloquent\Model make(array $attributes) Create and return an un-saved model instance.
 * @method static $this withGlobalScope(string $identifier, \Illuminate\Database\Eloquent\Scope | \Closure $scope) Register a new global scope.
 * @method static $this withoutGlobalScope(\Illuminate\Database\Eloquent\Scope | string $scope) Remove a registered global scope.
 * @method static $this withoutGlobalScopes(array | null $scopes) Remove all or passed registered global scopes.
 * @method static array removedScopes() Get an array of global scopes that were removed from the query.
 * @method static $this whereKey(mixed $id) Add a where clause on the primary key to the query.
 * @method static $this whereKeyNot(mixed $id) Add a where clause on the primary key to the query.
 * @method static $this where(string | array | \Closure $column, string $operator, mixed $value, string $boolean) Add a basic where clause to the query.
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhere(\Closure | array | string $column, string $operator, mixed $value) Add an "or where" clause to the query.
 * @method static \Illuminate\Database\Eloquent\Collection hydrate(array $items) Create a collection of models from plain arrays.
 * @method static \Illuminate\Database\Eloquent\Collection fromQuery(string $query, array $bindings) Create a collection of models from a raw query.
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null find(mixed $id, array $columns) Find a model by its primary key.
 * @method static \Illuminate\Database\Eloquent\Collection findMany(\Illuminate\Contracts\Support\Arrayable | array $ids, array $columns) Find multiple models by their primary keys.
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection findOrFail(mixed $id, array $columns) Find a model by its primary key or throw an exception.
 * @method static \Illuminate\Database\Eloquent\Model findOrNew(mixed $id, array $columns) Find a model by its primary key or return fresh model instance.
 * @method static \Illuminate\Database\Eloquent\Model firstOrNew(array $attributes, array $values) Get the first record matching the attributes or instantiate it.
 * @method static \Illuminate\Database\Eloquent\Model firstOrCreate(array $attributes, array $values) Get the first record matching the attributes or create it.
 * @method static \Illuminate\Database\Eloquent\Model updateOrCreate(array $attributes, array $values) Create or update a record matching the attributes, and fill it with values.
 * @method static \Illuminate\Database\Eloquent\Model|static firstOrFail(array $columns) Execute the query and get the first result or throw an exception.
 * @method static \Illuminate\Database\Eloquent\Model|static|mixed firstOr(\Closure | array $columns, \Closure | null $callback) Execute the query and get the first result or call a callback.
 * @method static mixed value(string $column) Get a single column's value from the first result of a query.
 * @method static \Illuminate\Database\Eloquent\Collection|static[] get(array $columns) Execute the query as a "select" statement.
 * @method static \Illuminate\Database\Eloquent\Model[] getModels(array $columns) Get the hydrated models without eager loading.
 * @method static array eagerLoadRelations(array $models) Eager load the relationships for the models.
 * @method static \Generator cursor() Get a generator for the given query.
 * @method static bool chunkById(int $count, callable $callback, string $column, string | null $alias) Chunk the results of a query by comparing numeric IDs.
 * @method static \Illuminate\Support\Collection pluck(string $column, string | null $key) Get an array with the values of a given column.
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate(int $perPage, array $columns, string $pageName, int | null $page) Paginate the given query.
 * @method static \Illuminate\Contracts\Pagination\Paginator simplePaginate(int $perPage, array $columns, string $pageName, int | null $page) Paginate the given query into a simple paginator.
 * @method static \Illuminate\Database\Eloquent\Model|$this create(array $attributes) Save a new model and return the instance.
 * @method static \Illuminate\Database\Eloquent\Model|$this forceCreate(array $attributes) Save a new model and return the instance. Allow mass-assignment.
 * @method static void onDelete(\Closure $callback) Register a replacement for the default delete function.
 * @method static mixed scopes(array $scopes) Call the given local model scopes.
 * @method static \Illuminate\Database\Eloquent\Builder|static applyScopes() Apply the scopes to the Eloquent builder instance and return it.
 * @method static $this without(mixed $relations) Prevent the specified relations from being eager loaded.
 * @method static \Illuminate\Database\Eloquent\Model newModelInstance(array $attributes) Create a new instance of the model being queried.
 * @method static \Illuminate\Database\Query\Builder getQuery() Get the underlying query builder instance.
 * @method static $this setQuery(\Illuminate\Database\Query\Builder $query) Set the underlying query builder instance.
 * @method static \Illuminate\Database\Query\Builder toBase() Get a base query builder instance.
 * @method static array getEagerLoads() Get the relationships being eagerly loaded.
 * @method static $this setEagerLoads(array $eagerLoad) Set the relationships being eagerly loaded.
 * @method static \Illuminate\Database\Eloquent\Model getModel() Get the model instance being queried.
 * @method static $this setModel(\Illuminate\Database\Eloquent\Model $model) Set a model instance for the model being queried.
 * @method static \Closure getMacro(string $name) Get the given macro by name.
 * @method static bool chunk(int $count, callable $callback) Chunk the results of the query.
 * @method static bool each(callable $callback, int $count) Execute a callback over each item while chunking.
 * @method static \Illuminate\Database\Eloquent\Model|static|null first(array $columns) Execute the query and get the first result.
 * @method static mixed when(mixed $value, callable $callback, callable $default) Apply the callback's query changes if the given "value" is true.
 * @method static \Illuminate\Database\Query\Builder tap(\Closure $callback) Pass the query to a given callback.
 * @method static mixed unless(mixed $value, callable $callback, callable $default) Apply the callback's query changes if the given "value" is false.
 * @method static \Illuminate\Database\Eloquent\Builder|static has(string $relation, string $operator, int $count, string $boolean, \Closure | null $callback) Add a relationship count / exists condition to the query.
 * @method static \Illuminate\Database\Eloquent\Builder|static orHas(string $relation, string $operator, int $count) Add a relationship count / exists condition to the query with an "or".
 * @method static \Illuminate\Database\Eloquent\Builder|static doesntHave(string $relation, string $boolean, \Closure | null $callback) Add a relationship count / exists condition to the query.
 * @method static \Illuminate\Database\Eloquent\Builder|static orDoesntHave(string $relation) Add a relationship count / exists condition to the query with an "or".
 * @method static \Illuminate\Database\Eloquent\Builder|static whereHas(string $relation, \Closure | null $callback, string $operator, int $count) Add a relationship count / exists condition to the query with where clauses.
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhereHas(string $relation, \Closure $callback, string $operator, int $count) Add a relationship count / exists condition to the query with where clauses and an "or".
 * @method static \Illuminate\Database\Eloquent\Builder|static whereDoesntHave(string $relation, \Closure | null $callback) Add a relationship count / exists condition to the query with where clauses.
 * @method static \Illuminate\Database\Eloquent\Builder|static orWhereDoesntHave(string $relation, \Closure $callback) Add a relationship count / exists condition to the query with where clauses and an "or".
 * @method static $this withCount(mixed $relations) Add subselect queries to count the relations.
 * @method static \Illuminate\Database\Eloquent\Builder|static mergeConstraintsFrom(\Illuminate\Database\Eloquent\Builder $from) Merge the where constraints from another query to the current query.
 * @method static $this select(array | mixed $columns) Set the columns to be selected.
 * @method static \Illuminate\Database\Query\Builder|static selectRaw(string $expression, array $bindings) Add a new "raw" select expression to the query.
 * @method static \Illuminate\Database\Query\Builder|static selectSub(\Closure | \Illuminate\Database\Query\Builder | string $query, string $as) Add a subselect expression to the query.
 * @method static $this addSelect(array | mixed $column) Add a new select column to the query.
 * @method static $this distinct() Force the query to only return distinct results.
 * @method static $this from(string $table) Set the table which the query is targeting.
 * @method static $this join(string $table, string $first, string | null $operator, string | null $second, string $type, bool $where) Add a join clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static joinWhere(string $table, string $first, string $operator, string $second, string $type) Add a "join where" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static leftJoin(string $table, string $first, string | null $operator, string | null $second) Add a left join to the query.
 * @method static \Illuminate\Database\Query\Builder|static leftJoinWhere(string $table, string $first, string $operator, string $second) Add a "join where" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static rightJoin(string $table, string $first, string | null $operator, string | null $second) Add a right join to the query.
 * @method static \Illuminate\Database\Query\Builder|static rightJoinWhere(string $table, string $first, string $operator, string $second) Add a "right join where" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static crossJoin(string $table, string | null $first, string | null $operator, string | null $second) Add a "cross join" clause to the query.
 * @method static void mergeWheres(array $wheres, array $bindings) Merge an array of where clauses and bindings.
 * @method static \Illuminate\Database\Query\Builder|static whereColumn(string | array $first, string | null $operator, string | null $second, string | null $boolean) Add a "where" clause comparing two columns to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereColumn(string | array $first, string | null $operator, string | null $second) Add an "or where" clause comparing two columns to the query.
 * @method static $this whereRaw(string $sql, mixed $bindings, string $boolean) Add a raw where clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereRaw(string $sql, mixed $bindings) Add a raw or where clause to the query.
 * @method static $this whereIn(string $column, mixed $values, string $boolean, bool $not) Add a "where in" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereIn(string $column, mixed $values) Add an "or where in" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNotIn(string $column, mixed $values, string $boolean) Add a "where not in" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotIn(string $column, mixed $values) Add an "or where not in" clause to the query.
 * @method static $this whereNull(string $column, string $boolean, bool $not) Add a "where null" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNull(string $column) Add an "or where null" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNotNull(string $column, string $boolean) Add a "where not null" clause to the query.
 * @method static $this whereBetween(string $column, array $values, string $boolean, bool $not) Add a where between statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereBetween(string $column, array $values) Add an or where between statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNotBetween(string $column, array $values, string $boolean) Add a where not between statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotBetween(string $column, array $values) Add an or where not between statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotNull(string $column) Add an "or where not null" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereDate(string $column, string $operator, mixed $value, string $boolean) Add a "where date" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereDate(string $column, string $operator, string $value) Add an "or where date" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereTime(string $column, string $operator, int $value, string $boolean) Add a "where time" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereTime(string $column, string $operator, int $value) Add an "or where time" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereDay(string $column, string $operator, mixed $value, string $boolean) Add a "where day" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereMonth(string $column, string $operator, mixed $value, string $boolean) Add a "where month" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereYear(string $column, string $operator, mixed $value, string $boolean) Add a "where year" statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNested(\Closure $callback, string $boolean) Add a nested where statement to the query.
 * @method static \Illuminate\Database\Query\Builder forNestedWhere() Create a new query instance for nested where condition.
 * @method static $this addNestedWhereQuery(\Illuminate\Database\Query\Builder | static $query, string $boolean) Add another query builder as a nested where to the query builder.
 * @method static $this whereExists(\Closure $callback, string $boolean, bool $not) Add an exists clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereExists(\Closure $callback, bool $not) Add an or exists clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static whereNotExists(\Closure $callback, string $boolean) Add a where not exists clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orWhereNotExists(\Closure $callback) Add a where not exists clause to the query.
 * @method static $this addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean, bool $not) Add an exists clause to the query.
 * @method static $this dynamicWhere(string $method, string $parameters) Handles dynamic "where" clauses to the query.
 * @method static $this groupBy(array $groups) Add a "group by" clause to the query.
 * @method static $this having(string $column, string | null $operator, string | null $value, string $boolean) Add a "having" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orHaving(string $column, string | null $operator, string | null $value) Add a "or having" clause to the query.
 * @method static $this havingRaw(string $sql, array $bindings, string $boolean) Add a raw having clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static orHavingRaw(string $sql, array $bindings) Add a raw or having clause to the query.
 * @method static $this orderBy(string $column, string $direction) Add an "order by" clause to the query.
 * @method static $this orderByDesc(string $column) Add a descending "order by" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static latest(string $column) Add an "order by" clause for a timestamp to the query.
 * @method static \Illuminate\Database\Query\Builder|static oldest(string $column) Add an "order by" clause for a timestamp to the query.
 * @method static $this inRandomOrder(string $seed) Put the query's results in random order.
 * @method static $this orderByRaw(string $sql, array $bindings) Add a raw "order by" clause to the query.
 * @method static \Illuminate\Database\Query\Builder|static skip(int $value) Alias to set the "offset" value of the query.
 * @method static $this offset(int $value) Set the "offset" value of the query.
 * @method static \Illuminate\Database\Query\Builder|static take(int $value) Alias to set the "limit" value of the query.
 * @method static $this limit(int $value) Set the "limit" value of the query.
 * @method static \Illuminate\Database\Query\Builder|static forPage(int $page, int $perPage) Set the limit and offset for a given page.
 * @method static \Illuminate\Database\Query\Builder|static forPageAfterId(int $perPage, int $lastId, string $column) Constrain the query to the next "page" of results after a given ID.
 * @method static \Illuminate\Database\Query\Builder|static union(\Illuminate\Database\Query\Builder | \Closure $query, bool $all) Add a union statement to the query.
 * @method static \Illuminate\Database\Query\Builder|static unionAll(\Illuminate\Database\Query\Builder | \Closure $query) Add a union all statement to the query.
 * @method static $this lock(string | bool $value) Lock the selected rows in the table.
 * @method static \Illuminate\Database\Query\Builder lockForUpdate() Lock the selected rows in the table for updating.
 * @method static \Illuminate\Database\Query\Builder sharedLock() Share lock the selected rows in the table.
 * @method static string toSql() Get the SQL representation of the query.
 * @method static int getCountForPagination(array $columns) Get the count of the total records for the paginator.
 * @method static string implode(string $column, string $glue) Concatenate values of a given column as a string.
 * @method static bool exists() Determine if any rows exist for the current query.
 * @method static int count(string $columns) Retrieve the "count" result of the query.
 * @method static mixed min(string $column) Retrieve the minimum value of a given column.
 * @method static mixed max(string $column) Retrieve the maximum value of a given column.
 * @method static mixed sum(string $column) Retrieve the sum of the values of a given column.
 * @method static mixed avg(string $column) Retrieve the average of the values of a given column.
 * @method static mixed average(string $column) Alias for the "avg" method.
 * @method static mixed aggregate(string $function, array $columns) Execute an aggregate function on the database.
 * @method static float|int numericAggregate(string $function, array $columns) Execute a numeric aggregate function on the database.
 * @method static bool insert(array $values) Insert a new record into the database.
 * @method static int insertGetId(array $values, string | null $sequence) Insert a new record and get the value of the primary key.
 * @method static bool updateOrInsert(array $attributes, array $values) Insert or update a record matching the attributes, and fill it with values.
 * @method static void truncate() Run a truncate statement on the table.
 * @method static \Illuminate\Database\Query\Expression raw(mixed $value) Create a raw database expression.
 * @method static array getBindings() Get the current query value bindings in a flattened array.
 * @method static array getRawBindings() Get the raw array of bindings.
 * @method static $this setBindings(array $bindings, string $type) Set the bindings on the query builder.
 * @method static $this addBinding(mixed $value, string $type) Add a binding to the query.
 * @method static $this mergeBindings(\Illuminate\Database\Query\Builder $query) Merge an array of bindings into our bindings.
 * @method static \Illuminate\Database\Query\Processors\Processor getProcessor() Get the database query processor instance.
 * @method static \Illuminate\Database\Query\Grammars\Grammar getGrammar() Get the query grammar instance.
 * @method static $this useWritePdo() Use the write pdo for query.
 * @method static cloneWithout(array $properties) Clone the query without the given properties.
 * @method static cloneWithoutBindings(array $except) Clone the query without the given bindings.
 * @method static void macro(string $name, object | callable $macro) Register a custom macro.
 * @method static void mixin(object $mixin) Mix another object into the class.
 * @method static bool hasMacro(string $name) Checks if macro is registered.
 * @method static mixed macroCall(string $method, array $parameters) Dynamically handle calls to the class.
 */
class Horizon
{
    /**
     * The callback that should be used to authenticate Horizon users.
     *
     * @var \Closure
     */
    public static $authUsing;

    /**
     * The Slack notifications webhook URL.
     *
     * @var string
     */
    public static $slackWebhookUrl;

    /**
     * The Slack notifications channel.
     *
     * @var string
     */
    public static $slackChannel;

    /**
     * The SMS notifications phone number.
     *
     * @var string
     */
    public static $smsNumber;

    /**
     * The email address for notifications.
     *
     * @var string
     */
    public static $email;

    /**
     * The database configuration methods.
     *
     * @var array
     */
    public static $databases = [
        'Jobs', 'Supervisors', 'CommandQueue', 'Tags',
        'Metrics', 'Locks', 'Processes',
    ];

    /**
     * Determine if the given request can access the Horizon dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    public static function check($request)
    {
        return (static::$authUsing ?: function () {
            return app()->environment('local');
        })($request);
    }

    /**
     * Set the callback that should be used to authenticate Horizon users.
     *
     * @param  \Closure  $callback
     * @return static
     */
    public static function auth(Closure $callback)
    {
        static::$authUsing = $callback;

        return new static;
    }

    /**
     * Configure the Redis databases that will store Horizon data.
     *
     * @param  string  $connection
     * @return void
     */
    public static function use($connection)
    {
        $config = config("database.redis.{$connection}");

        config(['database.redis.horizon' => array_merge($config, [
            'options' => ['prefix' => config('horizon.prefix') ?: 'horizon:'],
        ])]);
    }

    /**
     * Specify the email address to which email notifications should be routed.
     *
     * @param  string  $email
     * @return static
     */
    public static function routeMailNotificationsTo($email)
    {
        static::$email = $email;

        return new static;
    }

    /**
     * Specify the webhook URL and channel to which Slack notifications should be routed.
     *
     * @param  string  $url
     * @param  string  $channel
     * @return static
     */
    public static function routeSlackNotificationsTo($url, $channel = null)
    {
        static::$slackWebhookUrl = $url;
        static::$slackChannel = $channel;

        return new static;
    }

    /**
     * Specify the phone number to which SMS notifications should be routed.
     *
     * @param  string  $number
     * @return static
     */
    public static function routeSmsNotificationsTo($number)
    {
        static::$smsNumber = $number;

        return new static;
    }
}
