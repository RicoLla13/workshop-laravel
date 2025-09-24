# Personal notes for course

## Where am I?

Search for `//LEFT HERE`.

## Seeder

In Model
```php
    protected $fillable = [
        'title',
        'pages',
        'quantity'
    ];

    // $fillable with fields of the created model
```

In Seeder
```php
    public function run(): void
    {
        Book::create([
            'title' => 'Book 1',
            'pages' => 60,
            'quantity' => 20
        ]);
    }
```

## To check database

```bash
saila tinker

> App\Models\Book::all()
```
