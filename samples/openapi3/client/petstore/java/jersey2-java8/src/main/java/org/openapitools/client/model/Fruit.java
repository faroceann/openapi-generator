/*
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


package org.openapitools.client.model;

import java.util.Objects;
import java.util.Arrays;
import com.fasterxml.jackson.annotation.JsonInclude;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.JsonCreator;
import com.fasterxml.jackson.annotation.JsonValue;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.math.BigDecimal;
import org.openapitools.client.model.Apple;
import org.openapitools.client.model.Banana;
import com.fasterxml.jackson.annotation.JsonPropertyOrder;

import javax.ws.rs.core.GenericType;
import javax.ws.rs.core.Response;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;

import com.fasterxml.jackson.core.JsonParser;
import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.DeserializationContext;
import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.annotation.JsonDeserialize;
import com.fasterxml.jackson.databind.deser.std.StdDeserializer;


@JsonDeserialize(using=Fruit.FruitDeserializer.class)
public class Fruit extends AbstractOpenApiSchema {
    private static final Logger log = Logger.getLogger(Fruit.class.getName());

    public static class FruitDeserializer extends StdDeserializer<Fruit> {
        public FruitDeserializer() {
            this(Fruit.class);
        }

        public FruitDeserializer(Class<?> vc) {
            super(vc);
        }

        @Override
        public Fruit deserialize(JsonParser jp, DeserializationContext ctxt) throws IOException, JsonProcessingException {
            JsonNode tree = jp.readValueAsTree();

            int match = 0;
            Object deserialized = null;
            // deserialize Apple
            try {
                deserialized = tree.traverse(jp.getCodec()).readValueAs(Apple.class);
                match++;
                log.log(Level.FINER, "Input data matches schema 'Apple'");
            } catch (Exception e) {
                // deserialization failed, continue
                log.log(Level.FINER, "Input data does not match schema 'Apple'", e);
            }

            // deserialize Banana
            try {
                deserialized = tree.traverse(jp.getCodec()).readValueAs(Banana.class);
                match++;
                log.log(Level.FINER, "Input data matches schema 'Banana'");
            } catch (Exception e) {
                // deserialization failed, continue
                log.log(Level.FINER, "Input data does not match schema 'Banana'", e);
            }

            if (match == 1) {
                Fruit ret = new Fruit();
                ret.setActualInstance(deserialized);
                return ret;
            }
            throw new IOException(String.format("Failed deserialization for Fruit: %d classes match result, expected 1", match));
        }
    }

    // store a list of schema names defined in oneOf
    public final static Map<String, GenericType> schemas = new HashMap<String, GenericType>();

    public Fruit() {
        super("oneOf", Boolean.FALSE);
    }

    public Fruit(Apple o) {
        super("oneOf", Boolean.FALSE);
        setActualInstance(o);
    }

    public Fruit(Banana o) {
        super("oneOf", Boolean.FALSE);
        setActualInstance(o);
    }

    static {
        schemas.put("Apple", new GenericType<Apple>() {
        });
        schemas.put("Banana", new GenericType<Banana>() {
        });
    }

    @Override
    public Map<String, GenericType> getSchemas() {
        return Fruit.schemas;
    }

    @Override
    public void setActualInstance(Object instance) {
        if (instance instanceof Apple) {
            super.setActualInstance(instance);
            return;
        }

        if (instance instanceof Banana) {
            super.setActualInstance(instance);
            return;
        }

        throw new RuntimeException("Invalid instance type. Must be Apple, Banana");
    }



}
