# Test `ext/jsond` with Hoa\Compiler

Extract from the discussion:

> For my PhD thesis in the automatic testing domain, I have created some
> grammar-based testing algorithms, based on our dedicated LL(k) compiler
> compiler (with its dedicated grammar description language called PP). Please,
> see the [article](http://hoa-project.net/Literature/Research/Amost12.html)
> (along with the
> [presentation](http://keynote.hoa-project.net/Amost12/EDGB12.pdf) and all the
> [details](http://hoa-project.net/Event/Amost12.html) about the article and the
> conference) and also the [tool](https://github.com/hoaproject/Compiler)
> (called Hoa\Compiler). In this article, my experimentation consisted to
> generate a lot of JSON strings (based on the [JSON
> grammar](https://github.com/hoaproject/Json/blob/master/Grammar.pp) written in
> PP) and compared them against the JSON parser of Gecko and PHP. Now I re-play
> this experimentation but I compare all the generated data with `ext/json` and
> `ext/jsond` to see if there is no potential regression.  Also, I test it with
> a bounded exhaustive algorithm: it means we generate all possible JSON strings
> up to a given size (the unit is the number of tokens in a sequence, so `{`,
> `true` or `foo` are tokens).

## Usage

You must have [`ext/jsond`](https://github.com/bukka/php-jsond) installed, along
with [Composer](https://getcomposer.org), then:

```sh
$ composer install
$ php -d 'extension=jsond.so' Generation.php
```
