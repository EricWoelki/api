<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Tests\Api;

use Tmdb\Common\ParameterBag;

class SearchTest extends TestCase
{
    const QUERY_MOVIE      = 'resident evil';
    const QUERY_COLLECTION = 'lord of the rings';
    const QUERY_TV         = 'the simpsons';
    const QUERY_PERSON     = 'vin diesel';
    const QUERY_LIST       = 'best of';
    const QUERY_COMPANY    = 'sony pictures';
    const QUERY_KEYWORD    = 'horror';

    /**
     * @test
     */
    public function shouldSearchMovies()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $this->getAdapter()->expects($this->once())
            ->method('get')
            ->with('search/movie',  new ParameterBag(array_merge(
                $this->getDefaultQueryParameters(),
                [
                    'query' => new ParameterBag([
                        'query'   => urlencode(self::QUERY_MOVIE),
                        'api_key' => 'abcdef'
                    ])
                ]
        )));

        $api->searchMovies(self::QUERY_MOVIE);
    }

    /**
     * @test
     */
    public function shouldSearchCollection()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $this->getAdapter()->expects($this->once())
            ->method('get')
            ->with('search/collection',  new ParameterBag(array_merge(
                $this->getDefaultQueryParameters(),
                [
                    'query' => new ParameterBag([
                        'query'   => urlencode(self::QUERY_COLLECTION),
                        'api_key' => 'abcdef'
                    ])
                ]
        )));

        $api->searchCollection(self::QUERY_COLLECTION);
    }

    /**
     * @test
     */
    public function shouldSearchTv()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $this->getAdapter()->expects($this->once())
            ->method('get')
            ->with('search/tv',  new ParameterBag(array_merge(
                $this->getDefaultQueryParameters(),
                [
                    'query' => new ParameterBag([
                        'query'   => urlencode(self::QUERY_TV),
                        'api_key' => 'abcdef'
                    ])
                ]
        )));

        $api->searchTv(self::QUERY_TV);
    }

    /**
     * @test
     */
    public function shouldPersonCollection()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $this->getAdapter()->expects($this->once())
            ->method('get')
            ->with('search/person',  new ParameterBag(array_merge(
                $this->getDefaultQueryParameters(),
                [
                    'query' => new ParameterBag([
                        'query'   => urlencode(self::QUERY_PERSON),
                        'api_key' => 'abcdef'
                    ])
                ]
        )));

        $api->searchPersons(self::QUERY_PERSON);
    }

    /**
     * @test
     */
    public function shouldSearchList()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $this->getAdapter()->expects($this->once())
            ->method('get')
            ->with('search/list',  new ParameterBag(array_merge(
                $this->getDefaultQueryParameters(),
                [
                    'query' => new ParameterBag([
                        'query'   => urlencode(self::QUERY_LIST),
                        'api_key' => 'abcdef'
                    ])
                ]
        )));

        $api->searchList(self::QUERY_LIST);
    }

    /**
     * @test
     */
    public function shouldSearchCompany()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $this->getAdapter()->expects($this->once())
            ->method('get')
            ->with('search/company',  new ParameterBag(array_merge(
                $this->getDefaultQueryParameters(),
                [
                    'query' => new ParameterBag([
                        'query'   => urlencode(self::QUERY_COMPANY),
                        'api_key' => 'abcdef'
                    ])
                ]
        )));

        $api->searchCompany(self::QUERY_COMPANY);
    }

    /**
     * @test
     */
    public function shouldSearchKeyword()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $this->getAdapter()->expects($this->once())
            ->method('get')
            ->with('search/keyword',  new ParameterBag(array_merge(
                $this->getDefaultQueryParameters(),
                [
                    'query' => new ParameterBag([
                        'query'   => urlencode(self::QUERY_KEYWORD),
                        'api_key' => 'abcdef'
                    ])
                ]
        )));

        $api->searchKeyword(self::QUERY_KEYWORD);
    }

    /**
     * @test
     */
    public function shouldSearchMulti()
    {
        $api = $this->getApiWithMockedHttpAdapter();

        $this->getAdapter()->expects($this->once())
            ->method('get')
            ->with('search/multi',  new ParameterBag(array_merge(
                $this->getDefaultQueryParameters(),
                [
                    'query' => new ParameterBag([
                        'query'   => urlencode(self::QUERY_KEYWORD),
                        'api_key' => 'abcdef'
                    ])
                ]
        )));

        $api->searchMulti(self::QUERY_KEYWORD);
    }

    protected function getApiClass()
    {
        return 'Tmdb\Api\Search';
    }
}
